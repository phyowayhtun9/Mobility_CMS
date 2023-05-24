@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($slider->slider_title) ? 'Edit Slider' : 'Add Slider' }}</h2>
		
		<a href="{{ URL::to('admin/sliders') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/sliders/addslider'),'class'=>'form-horizontal padding-15','name'=>'sliders_form','id'=>'sliders_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                 
                <input type="hidden" name="id" value="{{ isset($slider->id) ? $slider->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="slider_title" value="{{ isset($slider->slider_title) ? $slider->slider_title : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Sub Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="slider_sub_title" value="{{ isset($slider->slider_sub_title) ? $slider->slider_sub_title : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Slide</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($slider->slider_image))
                                 
                                    <img src="{{ URL::asset('upload/slider/'.$slider->slider_image.'-b.jpg') }}" width="200" alt="person">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="slider_image" class="filestyle">
                                <small class="text-muted bold">Size 1600x900px</small> 
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($slider->id) ? 'Edit Slider ' : 'Add Slider' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection