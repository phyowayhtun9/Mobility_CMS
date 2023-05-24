<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Testimonials;
 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class TestimonialsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function testimonials()    { 
        
              
        $testimonials = Testimonials::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.testimonials',compact('testimonials'));
    }
    
    public function addeditaddtestimonials()    { 
        
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddtestimonials');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'name' => 'required',
                'testimonial' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $testimonials = Testimonials::findOrFail($inputs['id']);

        }else{

            $testimonials = new Testimonials;

        } 

        //user image
        $user_image = $request->file('image');
         
        if($user_image){
            
             \File::delete(public_path() .'/upload/testimonial/'.$testimonials->image.'-b.png');
            
            
            $tmpFilePath = 'upload/testimonial/';          
             
            $hardPath = str_slug($inputs['name'], "-").'_'.time();
            
            $img = Image::make($user_image);

            $img->save($tmpFilePath.$hardPath.'-b.png');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $testimonials->image = $hardPath;
             
        }

        $testimonials->name = $inputs['name']; 
        $testimonials->testimonial = $inputs['testimonial']; 
		 
		
		 
	    $testimonials->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function edittestimonials($testimonial_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
           

          $testimonial = Testimonials::findOrFail($testimonial_id);
          
          

          return view('admin.pages.addeditaddtestimonials',compact('testimonial'));
        
    }	 
    
    public function delete($testimonial_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $testimonials = Testimonials::findOrFail($testimonial_id);

        \File::delete(public_path() .'/upload/testimonial/'.$testimonials->image.'-b.png');

        $testimonials->delete();

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
