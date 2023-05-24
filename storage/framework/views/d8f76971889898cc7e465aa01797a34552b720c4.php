<?php $__env->startSection('head_title', getcong_widgets('about_title') .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="470">
  <div id="subheader">
    <div id="sub_content"> 
      <h1><?php echo e(getcong_widgets('about_title')); ?></h1>
       
    </div>
    <!-- End sub_content --> 
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->
 

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>                
                <li><?php echo e(getcong_widgets('about_title')); ?></li>
            </ul>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
  <div class="row">
    <div class="col-md-12">

        <?php echo getcong_widgets('about_desc'); ?>

       
     
    </div>
     
  </div><!-- End row -->
   
   
</div><!-- End container -->

 
<!-- End Content =============================================== -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>