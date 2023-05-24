<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Portfolio;
use App\Categories; 

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class PortfolioController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function portfolio()    { 
        
              
        $portfolio = Portfolio::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.portfolio',compact('portfolio'));
    }
    
    public function addeditaddportfolio()    { 
        
        $categories = Categories::orderBy('category_name')->get();

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
        return view('admin.pages.addeditaddportfolio',compact('categories'));
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'category' => 'required',
                'title' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $portfolio = Portfolio::findOrFail($inputs['id']);

        }else{

            $portfolio = new Portfolio;

        } 

        //Logo image
        $portfolio_image = $request->file('image');
         
        if($portfolio_image){
            
             \File::delete(public_path() .'/upload/portfolio/'.$portfolio->image.'-b.jpg');
           // \File::delete(public_path() .'/upload/slider/'.$slider->slider_image.'-s.jpg');
            
            $tmpFilePath = 'upload/portfolio/';          
             
            $hardPath = str_slug($inputs['title'], "-").'_'.time();
            
            $img = Image::make($portfolio_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(200, 200)->save($tmpFilePath.$hardPath. '-s.jpg');

            $portfolio->image = $hardPath;
             
        }

        $portfolio->cat_id = $inputs['category']; 
        $portfolio->title = $inputs['title']; 
		 
		
		 
	    $portfolio->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editportfolio($portfolio_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          $categories = Categories::orderBy('category_name')->get();

          $portfolio = Portfolio::findOrFail($portfolio_id);
          
          

          return view('admin.pages.addeditaddportfolio',compact('portfolio','categories'));
        
    }	 
    
    public function delete($portfolio_id)
    {
    	if(Auth::User()->usertype=="Admin")
        {
        	
        $portfolio = Portfolio::findOrFail($portfolio_id);

        \File::delete(public_path() .'/upload/portfolio/'.$portfolio->image.'-b.jpg');

        $portfolio->delete();

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
