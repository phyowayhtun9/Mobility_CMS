@extends("admin.admin_app")

@section("content")

<div id="main">
	 <br/>
    <div class="panel panel-primary" style="height:470px;">
        <div class="panel-body text-center" style="padding: 15%;">
            <h1 class="margin-b-none">Welcome Admin</h1>
 
            <div class="text-center">
                <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt="logo">

            </div>
        </div>
    </div>
 
    
 
</div>

@endsection