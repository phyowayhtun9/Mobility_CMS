<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Team;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class TeamController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function team()    { 
        
              
        $team = Team::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.team',compact('team'));
    }
    
    public function addeditaddteam()    
    { 
         

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddteam');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'name' => 'required',
                'designation' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $team = Team::findOrFail($inputs['id']);

        }else{

            $team = new Team;

        } 

        //Logo image
        $team_image = $request->file('image');
         
        if($team_image){
            
             \File::delete(public_path() .'/upload/team/'.$team->image.'-b.jpg');
           // \File::delete(public_path() .'/upload/slider/'.$slider->slider_image.'-s.jpg');
            
            $tmpFilePath = 'upload/team/';          
             
            $hardPath = str_slug($inputs['name'], "-").'_'.time();
            
            $img = Image::make($team_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $team->image = $hardPath;
             
        }

        $team->name = $inputs['name']; 
        $team->designation = $inputs['designation'];
        $team->facebook_url = $inputs['facebook_url'];
        $team->twitter_url = $inputs['twitter_url'];
        $team->linkedin_url = $inputs['linkedin_url'];
        $team->gplus_url = $inputs['gplus_url']; 
		 
		
		 
	    $team->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editteam($team_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          
          $team = Team::findOrFail($team_id);
          
          

          return view('admin.pages.addeditaddteam',compact('team'));
        
    }	 
    
    public function delete($team_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $team = Team::findOrFail($team_id);

        \File::delete(public_path() .'/upload/team/'.$team->image.'-b.jpg');

        $team->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        
        }
    }
 
    	
}
