  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li><p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo e(getcong('site_email')); ?>"><?php echo e(getcong('site_email')); ?></a></p></li>
      </ul>
      <ul class="right-bar-side social_icons">
         <li class="facebook"><a href="<?php echo e(getcong_widgets('social_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_google')); ?>" target="_blank"><i class="fa fa-google"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
    </div>
  </div>
  <header class="sticky">
    <div class="container">
      <div class="logo"> <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="" ></a> </div>
      <nav class="animenu">
      <button class="animenu_toggle"> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
      </button>
      <ul class="animenu_nav">
            <li> <a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(URL::to('restaurants')); ?>">Restaurants</a></li>

            <?php if(Auth::check() and Auth::user()->usertype=='User'): ?>

             <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('profile')); ?>">Edit Profile</a></li>
                <li><a href="<?php echo e(URL::to('change_pass')); ?>">Change Password</a></li>
                <li><a href="<?php echo e(URL::to('myorder')); ?>">My Order</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Owner'): ?>
              <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Admin'): ?>
              <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
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
       
       
    </nav>
    </div>
  </header>
   