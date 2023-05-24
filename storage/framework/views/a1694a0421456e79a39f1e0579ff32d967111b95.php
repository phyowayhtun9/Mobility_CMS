<?php $__env->startSection('head_title', getcong_widgets('about_title') .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1><?php echo e(getcong_widgets('about_title')); ?></h1>
      </div>
    </div>
  </div>
 
 <div class="what-we-do">
  <div class="container about_block">
  
    <div class="col-md-12">

        <?php echo getcong_widgets('about_desc'); ?>

       
     
    </div>
   
  </div>
</div>
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>