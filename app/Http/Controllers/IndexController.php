<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Sliders;
use App\Services;
use App\Categories;
use App\Portfolio;
use App\Team;
use App\Testimonials;
use App\WhyChoose;
use App\OurClients;
 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	 

    public function index()
    {   
        if(!$this->alreadyInstalled()) {
            return redirect('install');
        }
    	  
         $sliders=Sliders::orderBy('id')->get();

         $services=Services::orderBy('id')->get();

         $categories=Categories::orderBy('id')->get();

         $portfolio=Portfolio::orderBy('id')->get();  

         $team=Team::orderBy('id')->get();

         $testimonials=Testimonials::orderBy('id')->get();  

         $whychoose = WhyChoose::orderBy('id')->get();

         $clients = OurClients::orderBy('id')->get();

        return view('pages.index',compact('sliders','services','categories','portfolio','team','testimonials','whychoose','clients'));
    }

     /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }
     

    public function contact_send(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(                
                'name' => 'required',
                'email' => 'required|email|max:75'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                print_r($validator->messages());
        } 
          
            $data = array(
            'name' => $inputs['name'],
            'email' => $inputs['email'],            
            'user_message' => $inputs['message'],
             );

            $subject='Contact Inquiry';

            \Mail::send('emails.contact', $data, function ($message) use ($subject){

                $message->from(getcong('site_email'), getcong('site_name'));

                $message->to(getcong('site_email'))->subject($subject);

            });
        

            \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');

            return redirect('/#contact');
 
         
    }    
}
