@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($testimonial->name) ? 'Edit Testimonial' : 'Add Testimonial' }}</h2>
		
		<a href="{{ URL::to('admin/testimonials') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/testimonials/addtestimonials'),'class'=>'form-horizontal padding-15','name'=>'testimonial_form','id'=>'testimonial_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                 
                <input type="hidden" name="id" value="{{ isset($testimonial->id) ? $testimonial->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{ isset($testimonial->name) ? $testimonial->name : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Testimonial</label>
                      <div class="col-sm-9">
                         
                        <textarea name="testimonial" class="form-control" rows="5" placeholder="A few words">{{ isset($testimonial->testimonial) ? $testimonial->testimonial : null }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($testimonial->image))
                                 
                                    <img src="{{ URL::asset('upload/testimonial/'.$testimonial->image.'-b.png') }}" width="100" alt="service">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle"> 
                                <small class="text-muted bold">Size 150x150px</small>
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($testimonial->id) ? 'Edit Testimonial ' : 'Add Testimonial' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection