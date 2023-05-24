<!-- Header ================================================== -->
<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col--md-4 col-sm-4 col-xs-4"> 
      		<a href="<?php echo e(URL::to('/')); ?>" id="logo">
      		<img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" width="" height="" alt="" data-retina="true" class="hidden-xs">
			
			<img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" width="" height="" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
		</a>
      	  </div>
      <nav class="col--md-8 col-sm-8 col-xs-8"> <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
        <div class="main-menu">
          <div id="header_menu"> <img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" width="190" height="23" alt="" data-retina="true"> </div>
          <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
          <ul>
            <li> <a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(URL::to('restaurants')); ?>">Restaurants</a></li>

            <?php if(Auth::check() and Auth::user()->usertype=='User'): ?>

             <li class="submenu"> <a href="javascript:void(0);" class="show-submenu">My Account<i class="icon-down-open-mini"></i></a>
              <ul>
                <li><a href="<?php echo e(URL::to('profile')); ?>">Edit Profile</a></li>
                <li><a href="<?php echo e(URL::to('change_pass')); ?>">Change Password</a></li>
                <li><a href="<?php echo e(URL::to('myorder')); ?>">My Order</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Admin'): ?>
              <li class="submenu"> <a href="javascript:void(0);" class="show-submenu">My Account<i class="icon-down-open-mini"></i></a>
              <ul>
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>

              
            <?php else: ?>
 
            <li><a href="<?php echo e(URL::to('login')); ?>">Login</a></li>
            <li><a href="<?php echo e(URL::to('register')); ?>">Register</a></li>

            <?php endif; ?>

            <li><a href="<?php echo e(URL::to('about')); ?>">About us</a></li>
            <li><a href="<?php echo e(URL::to('contact')); ?>">Contact</a></li>              
          </ul>
        </div>
        <!-- End main-menu --> 
      </nav>
    </div>
    <!-- End row --> 
  </div>
  <!-- End container --> 
</header>
<!-- End Header =============================================== --> 