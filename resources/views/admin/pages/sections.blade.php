@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> Sections</h2>
		 
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
            <a href="#service" aria-controls="service" role="tab" data-toggle="tab">Service</a>
        </li>
        
        <li role="presentation">
            <a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a>
        </li>
        <li role="presentation">
            <a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab">Portfolio</a>
        </li>
        <li role="presentation">
            <a href="#achivement" aria-controls="achivement" role="tab" data-toggle="tab">Achivement</a>
        </li>
        <li role="presentation">
            <a href="#team" aria-controls="team" role="tab" data-toggle="tab">Team</a>
        </li>
        <li role="presentation">
            <a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a>
        </li>
        <li role="presentation">
            <a href="#testimonials" aria-controls="testimonials" role="tab" data-toggle="tab">Testimonials</a>
        </li>
        <li role="presentation">
            <a href="#why_choose" aria-controls="why_choose" role="tab" data-toggle="tab">Why Choose</a>
        </li>

        <li role="presentation">
            <a href="#clients" aria-controls="clients" role="tab" data-toggle="tab">Our Clients</a>
        </li> 

        <li role="presentation">
            <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact Us</a>
        </li>        
         
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="service">             
            {!! Form::open(array('url' => 'admin/service_section','class'=>'form-horizontal padding-15','name'=>'service_form','id'=>'service_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                 
				 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_service" value="{{ $sections->section_name_service }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_service_title" value="{{ $sections->section_service_title }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="section_service_desc" class="form-control" rows="5" placeholder="A few words about service">{{ $sections->section_service_desc }}</textarea>
                    </div>
                </div>
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>
         
        <div role="tabpanel" class="tab-pane" id="about">
            
            {!! Form::open(array('url' => 'admin/about_section','class'=>'form-horizontal padding-15','name'=>'about_form','id'=>'about_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_about" value="{{ $sections->section_name_about }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_about_title" value="{{ $sections->section_about_title }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="section_about_desc" class="form-control" rows="5" placeholder="A few words about company">{{ $sections->section_about_desc }}</textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if($sections->section_about_image)
                                 
                                    <img src="{{ URL::asset('upload/'.$sections->section_about_image) }}" width="150" alt="person">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="section_about_image" class="filestyle">
                                <small class="text-muted bold">Size 900x600px</small>
                            </div>
                        </div>
    
                    </div>
                </div>
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>
        
        <div role="tabpanel" class="tab-pane" id="portfolio">
            
            {!! Form::open(array('url' => 'admin/portfolio_section','class'=>'form-horizontal padding-15','name'=>'about_form','id'=>'about_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_portfolio" value="{{ $sections->section_name_portfolio }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_portfolio_title" value="{{ $sections->section_portfolio_title }}" class="form-control" value="">
                    </div>
                </div> 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="achivement">
            
            {!! Form::open(array('url' => 'admin/achivement_section','class'=>'form-horizontal padding-15','name'=>'achivement_form','id'=>'achivement_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_achivement_title" value="{{ $sections->section_achivement_title }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Block1 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block1_icon" value="{{ $sections->section_achivement_block1_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-2 control-label">Block1 Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block1_number" value="{{ $sections->section_achivement_block1_number }}" class="form-control" value="" placeholder="2000">
                    </div>

                    <label for="" class="col-sm-2 control-label">Block1 Title</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block1_title" value="{{ $sections->section_achivement_block1_title }}" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Block2 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block2_icon" value="{{ $sections->section_achivement_block2_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-2 control-label">Block2 Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block2_number" value="{{ $sections->section_achivement_block2_number }}" class="form-control" value="" placeholder="2000">
                    </div>

                    <label for="" class="col-sm-2 control-label">Block2 Title</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block2_title" value="{{ $sections->section_achivement_block2_title }}" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Block3 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block3_icon" value="{{ $sections->section_achivement_block3_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-2 control-label">Block3 Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block3_number" value="{{ $sections->section_achivement_block3_number }}" class="form-control" value="" placeholder="2000">
                    </div>

                    <label for="" class="col-sm-2 control-label">Block3 Title</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block3_title" value="{{ $sections->section_achivement_block3_title }}" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Block4 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block4_icon" value="{{ $sections->section_achivement_block4_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-2 control-label">Block4 Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block4_number" value="{{ $sections->section_achivement_block4_number }}" class="form-control" value="" placeholder="2000">
                    </div>

                    <label for="" class="col-sm-2 control-label">Block4 Title</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_achivement_block4_title" value="{{ $sections->section_achivement_block4_title }}" class="form-control" value="">
                    </div>
                </div>
                
                 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="team">
            
            {!! Form::open(array('url' => 'admin/team_section','class'=>'form-horizontal padding-15','name'=>'team_form','id'=>'team_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_team" value="{{ $sections->section_name_team }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_team_title" value="{{ $sections->section_team_title }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="section_team_desc" class="form-control" rows="5" placeholder="A few words about team">{{ $sections->section_team_desc }}</textarea>
                    </div>
                </div> 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="features">
            
            {!! Form::open(array('url' => 'admin/features_section','class'=>'form-horizontal padding-15','name'=>'features_form','id'=>'features_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_features" value="{{ $sections->section_name_features }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_features_title" value="{{ $sections->section_features_title }}" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="section_features_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features_desc }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Features Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                
                                @if($sections->section_features_image)
                                 
                                    <img src="{{ URL::asset('upload/'.$sections->section_features_image) }}" width="150" alt="person">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="features_image" class="filestyle">
                                <small class="text-muted bold">Size 320x600px</small>
                            </div>
                        </div>
    
                    </div>
                </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features1 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features1_icon" value="{{ $sections->section_features1_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features1 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features1_title" value="{{ $sections->section_features1_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features1 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features1_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features1_desc }}</textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features2 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features2_icon" value="{{ $sections->section_features2_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features2 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features2_title" value="{{ $sections->section_features2_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features2 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features2_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features2_desc }}</textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features3 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features3_icon" value="{{ $sections->section_features3_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features3 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features3_title" value="{{ $sections->section_features3_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features3 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features3_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features3_desc }}</textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features4 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features4_icon" value="{{ $sections->section_features4_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features4 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features4_title" value="{{ $sections->section_features4_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features4 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features4_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features4_desc }}</textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features5 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features5_icon" value="{{ $sections->section_features5_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features5 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features5_title" value="{{ $sections->section_features5_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features5 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features5_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features5_desc }}</textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Features6 Icon</label>
                    <div class="col-sm-2">
                        <input type="text" name="section_features6_icon" value="{{ $sections->section_features6_icon }}" class="form-control" value="" placeholder="fa-smile-o">
                        <small class="text-muted bold"><a href="http://fontawesome.io/cheatsheet/" Target="_blank">Font Awesome Icon</a></small>
                    </div>
                     
                     <label for="" class="col-sm-1 control-label">Features6 Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_features6_title" value="{{ $sections->section_features6_title }}" class="form-control" value="" placeholder="">
                    </div>

                    <label for="" class="col-sm-1 control-label">Features6 Description</label>
                    <div class="col-sm-4">                         
                        <textarea type="text" name="section_features6_desc" class="form-control" rows="5" placeholder="A few words">{{ $sections->section_features6_desc }}</textarea>
                    </div>
                 </div>
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="testimonials">
            
            {!! Form::open(array('url' => 'admin/testimonials_section','class'=>'form-horizontal padding-15','name'=>'testimonials_form','id'=>'testimonials_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_testimonials" value="{{ $sections->section_name_testimonials }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_testimonials_title" value="{{ $sections->section_testimonials_title }}" class="form-control" value="">
                    </div>
                </div> 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="why_choose">
            
            {!! Form::open(array('url' => 'admin/why_choose_section','class'=>'form-horizontal padding-15','name'=>'why_choose_form','id'=>'why_choose_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_whychoose" value="{{ $sections->section_name_whychoose }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_whychoose_title" value="{{ $sections->section_whychoose_title }}" class="form-control" value="">
                    </div>
                </div> 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>
        <div role="tabpanel" class="tab-pane" id="clients">
            
            {!! Form::open(array('url' => 'admin/our_clients_section','class'=>'form-horizontal padding-15','name'=>'clients_form','id'=>'clients_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                                  
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_our_client_title" value="{{ $sections->section_our_client_title }}" class="form-control" value="">
                    </div>
                </div> 
                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

        <div role="tabpanel" class="tab-pane" id="contact">
            
            {!! Form::open(array('url' => 'admin/contact_section','class'=>'form-horizontal padding-15','name'=>'contact_form','id'=>'contact_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_name_contact" value="{{ $sections->section_name_contact }}" class="form-control" value="">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="section_contact_title" value="{{ $sections->section_contact_title }}" class="form-control" value="">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Address</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="section_contact_address" class="form-control" rows="5" placeholder="Contact Address">{{ $sections->section_contact_address }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Email 1</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_contact_email1" value="{{ $sections->section_contact_email1 }}" class="form-control" value="" placeholder="">
                         
                    </div>
                     
                     <label for="" class="col-sm-3 control-label">Email 2</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_contact_email2" value="{{ $sections->section_contact_email2 }}" class="form-control" value="" placeholder="">
                    </div>

                     
                 </div>
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Phone 1</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_contact_phone1" value="{{ $sections->section_contact_phone1 }}" class="form-control" value="" placeholder="">
                         
                    </div>
                     
                     <label for="" class="col-sm-3 control-label">Phone 2</label>
                    <div class="col-sm-3">
                        <input type="text" name="section_contact_phone2" value="{{ $sections->section_contact_phone2 }}" class="form-control" value="" placeholder="">
                    </div>

                     
                 </div>

                  <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                         
                    </div>
                </div>

            {!! Form::close() !!} 
        </div>

    </div>
</div>
</div>

@endsection