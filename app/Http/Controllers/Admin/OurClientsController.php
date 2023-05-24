<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\OurClients;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class OurClientsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function clients()    { 
        
              
        $clients = OurClients::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.clients',compact('clients'));
    }
    
    public function addeditclients()    { 
        
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditclients');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'name' => 'required',                
                'image' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $clients = OurClients::findOrFail($inputs['id']);

        }else{

            $clients = new OurClients;

        } 

        //user image
        $user_image = $request->file('image');
         
        if($user_image){
            
             \File::delete(public_path() .'/upload/clients/'.$clients->image.'-b.png');
            
            
            $tmpFilePath = 'upload/clients/';          
             
            $hardPath = str_slug($inputs['name'], "-").'_'.time();
            
            $img = Image::make($user_image);

            $img->save($tmpFilePath.$hardPath.'-b.png');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $clients->image = $hardPath;
             
        }

        $clients->name = $inputs['name']; 
        $clients->url = $inputs['url']; 
		 
		
		 
	    $clients->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editclients($client_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
           

          $client = OurClients::findOrFail($client_id);
          
          

          return view('admin.pages.addeditclients',compact('client'));
        
    }	 
    
    public function delete($client_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $clients = OurClients::findOrFail($client_id);

        \File::delete(public_path() .'/upload/clients/'.$clients->image.'-b.png');

        $clients->delete();

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
