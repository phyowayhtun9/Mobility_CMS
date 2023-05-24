<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\WhyChoose;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class WhyChooseController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function whychoose()    { 
        
              
        $whychoose = WhyChoose::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.whychoose',compact('whychoose'));
    }
    
    public function addeditaddwhychoose()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddwhychoose');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'title' => 'required',
                'description' => 'required'	         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $whychoose = WhyChoose::findOrFail($inputs['id']);

        }else{

            $whychoose = new WhyChoose;

        } 
 

        $whychoose->title = $inputs['title']; 
        $whychoose->description = $inputs['description']; 
		 
		
		 
	    $whychoose->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editwhychoose($whychoose_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $whychoose = WhyChoose::findOrFail($whychoose_id);
          
          

          return view('admin.pages.addeditaddwhychoose',compact('whychoose'));
        
    }	 
    
    public function delete($whychoose_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $whychoose = WhyChoose::findOrFail($whychoose_id);
        $whychoose->delete();

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
