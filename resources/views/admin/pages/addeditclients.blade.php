@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($client->name) ? 'Edit' : 'Add' }}</h2>
		
		<a href="{{ URL::to('admin/clients') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/clients/addclients'),'class'=>'form-horizontal padding-15','name'=>'clients_form','id'=>'clients_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                 
                <input type="hidden" name="id" value="{{ isset($client->id) ? $client->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{ isset($client->name) ? $client->name : null }}" class="form-control">
                    </div>
                </div>                 
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($client->image))
                                 
                                    <img src="{{ URL::asset('upload/clients/'.$client->image.'-b.png') }}" width="100" alt="client">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle"> 
                                <small class="text-muted bold">Size 210x100px</small>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">URL</label>
                      <div class="col-sm-9">
                        <input type="text" name="url" value="{{ isset($client->url) ? $client->url : null }}" class="form-control">
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($client->id) ? 'Edit' : 'Add' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection