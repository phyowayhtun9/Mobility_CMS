<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Sliders;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class SlidersController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function sliders()    { 
        
              
        $sliders = Sliders::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.sliders',compact('sliders'));
    }
    
    public function addeditaddslider()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddslider');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'slider_title' => 'required',
                'slider_image' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $slider = Sliders::findOrFail($inputs['id']);

        }else{

            $slider = new Sliders;

        } 

        //Logo image
        $slider_image = $request->file('slider_image');
         
        if($slider_image){
            
             \File::delete(public_path() .'/upload/slider/'.$slider->slider_image.'-b.jpg');
           // \File::delete(public_path() .'/upload/slider/'.$slider->slider_image.'-s.jpg');
            
            $tmpFilePath = 'upload/slider/';          
             
            $hardPath = str_slug($inputs['slider_title'], "-").'_'.time();
            
            $img = Image::make($slider_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $slider->slider_image = $hardPath;
             
        }

        $slider->slider_title = $inputs['slider_title']; 
        $slider->slider_sub_title = $inputs['slider_sub_title']; 
		 
		
		 
	    $slider->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editslider($slider_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $slider = Sliders::findOrFail($slider_id);
          
          

          return view('admin.pages.addeditaddslider',compact('slider'));
        
    }	 
    
    public function delete($slider_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $slider = Sliders::findOrFail($slider_id);
        $slider->delete();

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
