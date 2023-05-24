<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Sections;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 

class SectionsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
         
    }
    public function Sections()
    { 
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        $sections = Sections::findOrFail('1');
        
        return view('admin.pages.sections',compact('sections'));
    }

    public function service_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_service' => 'required',
		        'section_service_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_service = $inputs['section_name_service']; 
		$sections->section_service_title = $inputs['section_service_title'];
		$sections->section_service_desc = $inputs['section_service_desc'];		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    } 	 
    
    public function about_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_about' => 'required',
		        'section_about_title' => 'required',
		        'section_about_desc' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	    

	    $inputs = $request->all();
		
		$about_image = $request->file('section_about_image');
		
		  
		//Logo
		 
        if($about_image){
            
            
            $tmpFilePath = 'upload/';			
			 
			$hardPath = 'about_image.png';
			
            $img = Image::make($about_image);

            $img->save($tmpFilePath.$hardPath); 
             
            $sections->section_about_image = 'about_image.png';
             
        }       
         
       
		 
		$sections->section_name_about = $inputs['section_name_about']; 		
		$sections->section_about_title = $inputs['section_about_title'];
		$sections->section_about_desc = $inputs['section_about_desc'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }
    
     
    public function portfolio_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_portfolio' => 'required',
		        'section_portfolio_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_portfolio = $inputs['section_name_portfolio']; 
		$sections->section_portfolio_title = $inputs['section_portfolio_title'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function achivement_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(		         
		        'section_achivement_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		 
		$sections->section_achivement_title = $inputs['section_achivement_title'];

		$sections->section_achivement_block1_icon = $inputs['section_achivement_block1_icon'];
		$sections->section_achivement_block1_number = $inputs['section_achivement_block1_number'];
		$sections->section_achivement_block1_title = $inputs['section_achivement_block1_title'];

		$sections->section_achivement_block2_icon = $inputs['section_achivement_block2_icon'];
		$sections->section_achivement_block2_number = $inputs['section_achivement_block2_number'];
		$sections->section_achivement_block2_title = $inputs['section_achivement_block2_title'];

		$sections->section_achivement_block3_icon = $inputs['section_achivement_block3_icon'];
		$sections->section_achivement_block3_number = $inputs['section_achivement_block3_number'];
		$sections->section_achivement_block3_title = $inputs['section_achivement_block3_title'];

		$sections->section_achivement_block4_icon = $inputs['section_achivement_block4_icon'];
		$sections->section_achivement_block4_number = $inputs['section_achivement_block4_number'];
		$sections->section_achivement_block4_title = $inputs['section_achivement_block4_title'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    } 

    public function team_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_team' => 'required',
		        'section_team_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_team = $inputs['section_name_team']; 
		$sections->section_team_title = $inputs['section_team_title'];
		$sections->section_team_desc = $inputs['section_team_desc'];		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    } 	 
    
    public function features_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_features' => 'required',
		        'section_features_title' => 'required' 
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	    

	    $inputs = $request->all();
		
		$features_image = $request->file('features_image');
		
		  
		//Logo
		 
        if($features_image){
            
            
            $tmpFilePath = 'upload/';			
			 
			$hardPath = 'features_image.png';
			
            $img = Image::make($features_image);

            $img->save($tmpFilePath.$hardPath); 
             
            $sections->section_features_image = 'features_image.png';
             
        }       
         
       
		 
		$sections->section_name_features = $inputs['section_name_features']; 		
		$sections->section_features_title = $inputs['section_features_title'];
		$sections->section_features_desc = $inputs['section_features_desc'];

		$sections->section_features1_icon = $inputs['section_features1_icon'];
		$sections->section_features1_title = $inputs['section_features1_title'];
		$sections->section_features1_desc = $inputs['section_features1_desc'];

		$sections->section_features2_icon = $inputs['section_features2_icon'];
		$sections->section_features2_title = $inputs['section_features2_title'];
		$sections->section_features2_desc = $inputs['section_features2_desc'];

		$sections->section_features3_icon = $inputs['section_features3_icon'];
		$sections->section_features3_title = $inputs['section_features3_title'];
		$sections->section_features3_desc = $inputs['section_features3_desc'];

		$sections->section_features4_icon = $inputs['section_features4_icon'];
		$sections->section_features4_title = $inputs['section_features4_title'];
		$sections->section_features4_desc = $inputs['section_features4_desc'];

		$sections->section_features5_icon = $inputs['section_features5_icon'];
		$sections->section_features5_title = $inputs['section_features5_title'];
		$sections->section_features5_desc = $inputs['section_features5_desc'];

		$sections->section_features6_icon = $inputs['section_features6_icon'];
		$sections->section_features6_title = $inputs['section_features6_title'];
		$sections->section_features6_desc = $inputs['section_features6_desc'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function testimonials_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_testimonials' => 'required',
		        'section_testimonials_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_testimonials = $inputs['section_name_testimonials']; 
		$sections->section_testimonials_title = $inputs['section_testimonials_title'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function why_choose_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_whychoose' => 'required',
		        'section_whychoose_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_whychoose = $inputs['section_name_whychoose']; 
		$sections->section_whychoose_title = $inputs['section_whychoose_title'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function our_clients_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(		         
		        'section_our_client_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		 
		 
		$sections->section_our_client_title = $inputs['section_our_client_title'];
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

    public function contact_section(Request $request)
    {  
    		 
    	$sections = Sections::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'section_name_contact' => 'required',
		        'section_contact_title' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	     
	    $inputs = $request->all();
		
		 
		$sections->section_name_contact = $inputs['section_name_contact']; 
		$sections->section_contact_title = $inputs['section_contact_title'];

		$sections->section_contact_address = $inputs['section_contact_address']; 
		$sections->section_contact_email1 = $inputs['section_contact_email1'];
		$sections->section_contact_email2 = $inputs['section_contact_email2']; 
		$sections->section_contact_phone1 = $inputs['section_contact_phone1'];
		$sections->section_contact_phone2 = $inputs['section_contact_phone2']; 
		 
		 
		  
		 
	    $sections->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }

}
