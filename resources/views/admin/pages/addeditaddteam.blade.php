@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($team->title) ? 'Edit Team' : 'Add Team' }}</h2>
		
		<a href="{{ URL::to('admin/team') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
   
   	<div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url' => array('admin/team/addteam'),'class'=>'form-horizontal padding-15','name'=>'team_form','id'=>'team_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                 
                <input type="hidden" name="id" value="{{ isset($team->id) ? $team->id : null }}">

                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{ isset($team->name) ? $team->name : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-9">
                        <input type="text" name="designation" value="{{ isset($team->designation) ? $team->designation : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($team->image))
                                 
                                    <img src="{{ URL::asset('upload/team/'.$team->image.'-b.jpg') }}" width="70" alt="team">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle"> 
                                <small class="text-muted bold">Size 300x300px</small>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook URL</label>
                      <div class="col-sm-9">
                        <input type="text" name="facebook_url" value="{{ isset($team->facebook_url) ? $team->facebook_url : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">TwiTter UR </label>
                      <div class="col-sm-9">
                        <input type="text" name="twitter_url" value="{{ isset($team->twitter_url) ? $team->twitter_url : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin URL</label>
                      <div class="col-sm-9">
                        <input type="text" name="linkedin_url" value="{{ isset($team->linkedin_url) ? $team->linkedin_url : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Google Plus URL</label>
                      <div class="col-sm-9">
                        <input type="text" name="gplus_url" value="{{ isset($team->gplus_url) ? $team->gplus_url : null }}" class="form-control">
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($team->id) ? 'Edit Team ' : 'Add Team' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection