<!DOCTYPE html>
<html lang="en">
	
<head>
		<title><?php echo $__env->yieldContent('head_title', getcong('site_name')); ?></title>
		<meta charset="utf-8">
		<!--[if IE]>
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		 <meta name="description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('head_title',  getcong('site_name')); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
    <meta property="og:image" content="<?php echo $__env->yieldContent('head_image', url('/upload/logo.png')); ?>" />
    <meta property="og:url" content="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />	
		
		
    <!-- Favicons-->
	<link rel="shortcut icon" href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo e(URL::asset('site_assets/img/apple-touch-icon-57x57-precomposed.png')); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo e(URL::asset('site_assets/img/apple-touch-icon-72x72-precomposed.png')); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo e(URL::asset('site_assets/img/apple-touch-icon-114x114-precomposed.png')); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo e(URL::asset('site_assets/img/apple-touch-icon-144x144-precomposed.png')); ?>">

	<!-- GOOGLE WEB FONT -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

	<!-- BASE CSS -->
	<link href="<?php echo e(URL::asset('site_assets/css/base.css')); ?>" rel="stylesheet">

	<link href="<?php echo e(URL::asset('site_assets/css/fontello.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(URL::asset('site_assets/css/elegant_font.min.css')); ?>" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="<?php echo e(URL::asset('site_assets/js/html5shiv.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('site_assets/js/respond.min.js')); ?>"></script>
    <![endif]-->




	
	<?php echo getcong('site_header_code'); ?>

	
	<?php echo getcong('addthis_share_code'); ?>

	 
	
	</head>
	<body>
	  
	  	<div id="preloader">
		  <div class="sk-spinner sk-spinner-wave" id="status">
		    <div class="sk-rect1"></div>
		    <div class="sk-rect2"></div>
		    <div class="sk-rect3"></div>
		    <div class="sk-rect4"></div>
		    <div class="sk-rect5"></div>
		  </div>
		</div>
		<!-- End Preload --> 
	 
	 	<?php echo $__env->make("_particles.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
	 	
	 	<?php echo $__env->yieldContent("content"); ?>
	 	
	 	<?php echo $__env->make("_particles.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 	
	 
	 
		<div class="layer"></div>
<!-- Mobile menu overlay mask --> 

<!-- Login modal -->
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
 
	 

  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
       
      	<?php echo Form::open(array('class'=>'popup-form','id'=>'loginform','role'=>'form')); ?>

        <div class="login_icon"><i class="icon_lock_alt"></i></div>
        <input type="email" class="form-control form-white" placeholder="Enter Email">
        <input type="password" class="form-control form-white" placeholder="Password">
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="" id="check_2" name="remember" />
            <label for="check_2"><span>Remember Me</span></label>
          </div>

        </div>
        <div class="text-left"> <a href="#">Forgot Password?</a> </div>
        <button type="submit" class="btn btn-submit" onClick="login_user()">Submit</button>
      <?php echo Form::close(); ?> 
    </div>
  </div>
</div>
<!-- End modal --> 

<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      <form action="#" class="popup-form" id="myRegister">
        <div class="login_icon"><i class="icon_lock_alt"></i></div>
        <input type="text" class="form-control form-white" placeholder="Name">
        <input type="text" class="form-control form-white" placeholder="Last Name">
        <input type="email" class="form-control form-white" placeholder="Email">
        <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
        <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
        <div id="pass-info" class="clearfix"></div>
        <div class="checkbox-holder text-left">
          <div class="checkbox">
            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
            <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
          </div>
        </div>
        <button type="submit" class="btn btn-submit">Register</button>
      </form>
    </div>
  </div>
</div>
<!-- End Register modal --> 

<!-- COMMON SCRIPTS --> 
<script src="<?php echo e(URL::asset('site_assets/js/jquery-1.11.2.min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/common_scripts_min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/functions.js')); ?>"></script> 


<script>$("#cart_box").pin({padding: {top: 80, bottom: 25},minWidth: 1100, containerSelector: "#container_pin"})</script> 

<script>
 $(function() {
	 'use strict';
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 70
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>

 
	<?php echo getcong('site_footer_code'); ?>

	
	</body>
 
</html>	
	 	