<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 
	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
                	<?php if(Auth::user()->usertype=='Admin'): ?>
               
               		<li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                
               		<li class="<?php echo e(classActivePath('sliders')); ?>"><a href="<?php echo e(URL::to('admin/sliders')); ?>"><i class="fa fa-sliders"></i>Slider</a></li>

               		<li class="<?php echo e(classActivePath('services')); ?>"><a href="<?php echo e(URL::to('admin/services')); ?>"><i class="fa fa-leaf"></i>Services</a></li>

               		<li class="submenu<?php echo e(classActivePath('categories')); ?> <?php echo e(classActivePath('portfolio')); ?>">

					<a href="#"><i class="md md-my-library-add"></i>Portfolio</a>
						<ul <?php if(classActivePath('categories') or classActivePath('portfolio')): ?>style="display: block" class="collapse in"<?php endif; ?>>
	               			<li class="<?php echo e(classActivePath('categories')); ?>"><a href="<?php echo e(URL::to('admin/categories')); ?>">Categories</a></li>
	               			<li class="<?php echo e(classActivePath('portfolio')); ?>"><a href="<?php echo e(URL::to('admin/portfolio')); ?>">Portfolio</a></li>
	               		</ul>
               		</li>
               		    
	                <li class="<?php echo e(classActivePath('team')); ?>"><a href="<?php echo e(URL::to('admin/team')); ?>"><i class="fa fa-group"></i>Team</a></li>

	                <li class="<?php echo e(classActivePath('testimonials')); ?>"><a href="<?php echo e(URL::to('admin/testimonials')); ?>"><i class="fa fa-comments"></i>Testimonials</a></li>

	                <li class="<?php echo e(classActivePath('whychoose')); ?>"><a href="<?php echo e(URL::to('admin/whychoose')); ?>"><i class="fa fa-bookmark"></i>Why Choose</a></li>

	                <li class="<?php echo e(classActivePath('clients')); ?>"><a href="<?php echo e(URL::to('admin/clients')); ?>"><i class="fa fa-th-large"></i>Our Clients</a></li>

	                <li class="<?php echo e(classActivePath('sections')); ?>"><a href="<?php echo e(URL::to('admin/sections')); ?>"><i class="fa fa-list-alt"></i>Sections</a></li>
	                	
	                <li class="<?php echo e(classActivePath('settings')); ?>"><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i>Settings</a></li>
               	 

               	 <?php endif; ?>	
               		 
 
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
							 <?php if(Auth::user()->image_icon): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle border-white">
							
							<?php else: ?>
								
							<img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
							
							<?php endif; ?>
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></a>
						<a href="<?php echo e(URL::to('admin/logout')); ?>" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> Account</a></li>				 
				
				<?php if(Auth::user()->usertype=='Admin'): ?>
				
				<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i> Settings</a></li>
				
				<?php endif; ?>
				
				<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md md-exit-to-app"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
