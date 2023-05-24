<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Services;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class ServicesController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function services()    { 
        
              
        $services = Services::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.services',compact('services'));
    }
    
    public function addeditaddservice()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddservice');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'service_title' => 'required',
                'service_icon' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $service = Services::findOrFail($inputs['id']);

        }else{

            $service = new Services;

        } 

        //Logo image
        $service_icon = $request->file('service_icon');
         
        if($service_icon){
            
             \File::delete(public_path() .'/upload/service/'.$service->service_icon.'-b.jpg');
           // \File::delete(public_path() .'/upload/slider/'.$slider->slider_image.'-s.jpg');
            
            $tmpFilePath = 'upload/service/';          
             
            $hardPath = str_slug($inputs['service_title'], "-").'_'.time();
            
            $img = Image::make($service_icon);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $service->service_icon = $hardPath;
             
        }

        $service->service_title = $inputs['service_title']; 
        $service->service_text = $inputs['service_text']; 
		 
		
		 
	    $service->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editservice($service_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $service = Services::findOrFail($service_id);
          
          

          return view('admin.pages.addeditaddservice',compact('service'));
        
    }	 
    
    public function delete($service_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $service = Services::findOrFail($service_id);
        $service->delete();

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
