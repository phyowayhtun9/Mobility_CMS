@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($portfolio->title) ? 'Edit Portfolio' : 'Add Portfolio' }}</h2>
		
		<a href="{{ URL::to('admin/portfolio') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/portfolio/addportfolio'),'class'=>'form-horizontal padding-15','name'=>'portfolio_form','id'=>'portfolio_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                 
                <input type="hidden" name="id" value="{{ isset($portfolio->id) ? $portfolio->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                        <select id="basic" name="category" class="selectpicker show-tick form-control">
                            <option value="">Select Category</option>
                            
                            @foreach($categories as $i => $category)    
                                @if(isset($portfolio->cat_id) && $portfolio->cat_id==$category->id)  
                                    <option value="{{$category->id}}" selected >{{$category->category_name}}</option>
                                     
                                @else
                                <option value="{{$category->id}}">{{$category->category_name}}</option> 
                                @endif                          
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="title" value="{{ isset($portfolio->title) ? $portfolio->title : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($portfolio->image))
                                 
                                    <img src="{{ URL::asset('upload/portfolio/'.$portfolio->image.'-b.jpg') }}" width="70" alt="portfolio">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle"> 
                                <small class="text-muted bold">Size 650x550px</small>
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($portfolio->id) ? 'Edit Portfolio ' : 'Add Portfolio' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection