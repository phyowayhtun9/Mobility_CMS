@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> Settings</h2>
		<a href="{{ URL::to('admin/dashboard') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	 @if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
				@endif
    <div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#account" aria-controls="account" role="tab" data-toggle="tab">General Settings</a>
        </li>
        <li role="presentation">
            <a href="#sections" aria-controls="sections" role="tab" data-toggle="tab">All Sections Settings</a>
        </li>
        
        <li role="presentation">
            <a href="#other_Settings" aria-controls="other_Settings" role="tab" data-toggle="tab">Other Settings</a>
        </li>        
         
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="account">             
            {!! Form::open(array('url' => 'admin/settings','class'=>'form-horizontal padding-15','name'=>'account_form','id'=>'account_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Style</label>
                    <div class="col-sm-9">
                        <select id="basic" name="site_style" class="selectpicker show-tick form-control">
                            <option value="style_blue.css" @if(getcong('site_style')=='style_blue.css') selected @endif>Blue</option>
                            <option value="style_green.css" @if(getcong('site_style')=='style_green.css') selected @endif>Green</option>
                            <option value="style_red.css" @if(getcong('site_style')=='style_red.css') selected @endif>Red</option>
                            <option value="style_yellow.css" @if(getcong('site_style')=='style_yellow.css') selected @endif>Yellow</option>
                             
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if($settings->site_logo)
                                 
									<img src="{{ URL::asset('upload/'.$settings->site_logo) }}" width="150" alt="person">
								@endif
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_logo" class="filestyle">
                                <small class="text-muted bold">Size 190x23px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
				<div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Favicon</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if($settings->site_favicon)
                                 
									<img src="{{ URL::asset('upload/'.$settings->site_favicon) }}" alt="person">
								@endif
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_favicon" class="filestyle">
                                <small class="text-muted bold">Size 16x16px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="site_email" value="{{ $settings->site_email }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_description" class="form-control" rows="5" placeholder="A few words about site">{{ $settings->site_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="facebook_url" value="{{ $settings->facebook_url }}" class="form-control" value="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="linkedin_url" value="{{ $settings->linkedin_url }}" class="form-control" value="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Twitter URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="twitter_url" value="{{ $settings->twitter_url }}" class="form-control" value="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Pinterest URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="pinterest_url" value="{{ $settings->pinterest_url }}" class="form-control" value="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Google Plus URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="google_plus_url" value="{{ $settings->google_plus_url }}" class="form-control" value="">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Copyright Text</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_copyright" class="form-control" rows="5">{{ $settings->site_copyright }}</textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>
        
        <div role="tabpanel" class="tab-pane" id="sections">
            
            {!! Form::open(array('url' => 'admin/sections_settings','class'=>'form-horizontal padding-15','name'=>'sections_settings','id'=>'sections_settings','role'=>'form')) !!}
                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Service</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="service_section1" value="0" name="service_section" @if( $settings->service_section==0)checked @endif>
                            <label for="service_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="service_section2" value="1" name="service_section" @if( $settings->service_section==1)checked @endif>
                            <label for="service_section2"> Enable </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">About</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="about_section1" value="0" name="about_section" @if( $settings->about_section==0)checked @endif>
                            <label for="about_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="about_section2" value="1" name="about_section" @if( $settings->about_section==1)checked @endif>
                            <label for="about_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Portfolio</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="portfolio_section1" value="0" name="portfolio_section" @if( $settings->portfolio_section==0)checked @endif>
                            <label for="portfolio_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="portfolio_section2" value="1" name="portfolio_section" @if( $settings->portfolio_section==1)checked @endif>
                            <label for="portfolio_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Achivement</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="achivement_section1" value="0" name="achivement_section" @if( $settings->achivement_section==0)checked @endif>
                            <label for="achivement_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="achivement_section2" value="1" name="achivement_section" @if( $settings->achivement_section==1)checked @endif>
                            <label for="achivement_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Team</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="team_section1" value="0" name="team_section" @if( $settings->team_section==0)checked @endif>
                            <label for="team_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="team_section2" value="1" name="team_section" @if( $settings->team_section==1)checked @endif>
                            <label for="team_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Features</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="features_section1" value="0" name="features_section" @if( $settings->features_section==0)checked @endif>
                            <label for="features_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="features_section2" value="1" name="features_section" @if( $settings->features_section==1)checked @endif>
                            <label for="features_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Testimonials</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="testimonials_section1" value="0" name="testimonials_section" @if( $settings->testimonials_section==0)checked @endif>
                            <label for="testimonials_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="testimonials_section2" value="1" name="testimonials_section" @if( $settings->testimonials_section==1)checked @endif>
                            <label for="testimonials_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Why Choose</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="whychoose_section1" value="0" name="whychoose_section" @if( $settings->whychoose_section==0)checked @endif>
                            <label for="whychoose_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="whychoose_section2" value="1" name="whychoose_section" @if( $settings->whychoose_section==1)checked @endif>
                            <label for="whychoose_section2"> Enable </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Our Clients</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="our_clients_section1" value="0" name="our_clients_section" @if( $settings->our_clients_section==0)checked @endif>
                            <label for="our_clients_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="our_clients_section2" value="1" name="our_clients_section" @if( $settings->our_clients_section==1)checked @endif>
                            <label for="our_clients_section2"> Enable </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Us</label>
                    <div class="col-sm-9">                         
                        <div class="radio radio-inline">
                            <input type="radio" id="contact_us_section1" value="0" name="contact_us_section" @if( $settings->contact_us_section==0)checked @endif>
                            <label for="contact_us_section1"> Disable </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="contact_us_section2" value="1" name="contact_us_section" @if( $settings->contact_us_section==1)checked @endif>
                            <label for="contact_us_section2"> Enable </label>
                        </div>
                    </div>
                </div> 
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                    </div>
                </div>

            {!! Form::close() !!} 
        </div> 

        <div role="tabpanel" class="tab-pane" id="other_Settings">
            
            {!! Form::open(array('url' => 'admin/headfootupdate','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')) !!}
                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Header Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_header_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to header. ">{{ $settings->site_header_code }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Footer Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_footer_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to footer. ">{{ $settings->site_footer_code }}</textarea>
                    </div>
                </div>
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>
         
    </div>
</div>
</div>

@endsection