<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 
	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
                	@if(Auth::user()->usertype=='Admin')
               
               		<li class="{{classActivePath('dashboard')}}"><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                
               		<li class="{{classActivePath('sliders')}}"><a href="{{ URL::to('admin/sliders') }}"><i class="fa fa-sliders"></i>Slider</a></li>

               		<li class="{{classActivePath('services')}}"><a href="{{ URL::to('admin/services') }}"><i class="fa fa-leaf"></i>Services</a></li>

               		<li class="submenu{{classActivePath('categories')}} {{classActivePath('portfolio')}}">

					<a href="#"><i class="md md-my-library-add"></i>Portfolio</a>
						<ul @if(classActivePath('categories') or classActivePath('portfolio'))style="display: block" class="collapse in"@endif>
	               			<li class="{{classActivePath('categories')}}"><a href="{{ URL::to('admin/categories') }}">Categories</a></li>
	               			<li class="{{classActivePath('portfolio')}}"><a href="{{ URL::to('admin/portfolio') }}">Portfolio</a></li>
	               		</ul>
               		</li>
               		    
	                <li class="{{classActivePath('team')}}"><a href="{{ URL::to('admin/team') }}"><i class="fa fa-group"></i>Team</a></li>

	                <li class="{{classActivePath('testimonials')}}"><a href="{{ URL::to('admin/testimonials') }}"><i class="fa fa-comments"></i>Testimonials</a></li>

	                <li class="{{classActivePath('whychoose')}}"><a href="{{ URL::to('admin/whychoose') }}"><i class="fa fa-bookmark"></i>Why Choose</a></li>

	                <li class="{{classActivePath('clients')}}"><a href="{{ URL::to('admin/clients') }}"><i class="fa fa-th-large"></i>Our Clients</a></li>

	                <li class="{{classActivePath('sections')}}"><a href="{{ URL::to('admin/sections') }}"><i class="fa fa-list-alt"></i>Sections</a></li>
	                	
	                <li class="{{classActivePath('settings')}}"><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i>Settings</a></li>
               	 

               	 @endif	
               		 
 
			</ul>

			 
		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 @if(Auth::user()->image_icon)
                                 
									<img src="{{ URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg') }}" width="60" alt="person" class="img-circle border-white">
							
							@else
								
							<img src="{{ URL::asset('admin_assets/images/guy.jpg') }}" alt="person" class="img-circle border-white" width="60"/>
							
							@endif
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="{{ URL::to('admin/profile') }}" class="h4">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
						<a href="{{ URL::to('admin/logout') }}" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="{{ URL::to('admin/profile') }}"><i class="md md-person-outline"></i> Account</a></li>				 
				
				@if(Auth::user()->usertype=='Admin')
				
				<li><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i> Settings</a></li>
				
				@endif
				
				<li><a href="{{ URL::to('admin/logout') }}"><i class="md md-exit-to-app"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
