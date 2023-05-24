<?php $__env->startSection('head_title', getcong_widgets('contact_title') .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="470">
  <div id="subheader">
    <div id="sub_content"> 
      <h1><?php echo e(getcong_widgets('contact_title')); ?></h1>
       
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
                <li><?php echo e(getcong_widgets('contact_title')); ?></li>
            </ul>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
  <div class="row" id="contacts">
    <div class="col-md-6 col-sm-6">
      <div class="box_style_2">
        <h2 class="inner"><?php echo e(getcong_widgets('contact_block1_title')); ?></h2>
        <p class="add_bottom_30"><?php echo e(getcong_widgets('contact_block1_desc')); ?></p>
        <p><a href="tel://<?php echo e(getcong_widgets('contact_block1_phone')); ?>" class="phone"><i class="icon-phone-circled"></i> <?php echo e(getcong_widgets('contact_block1_phone')); ?></a></p>
        <p class="nopadding"><a href="mailto:<?php echo e(getcong_widgets('contact_block1_email')); ?>"><i class="icon-mail-3"></i> <?php echo e(getcong_widgets('contact_block1_email')); ?></a></p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="box_style_2">
       <h2 class="inner"><?php echo e(getcong_widgets('contact_block2_title')); ?></h2>
        <p class="add_bottom_30"><?php echo e(getcong_widgets('contact_block2_desc')); ?></p>
        <p><a href="tel://<?php echo e(getcong_widgets('contact_block2_phone')); ?>" class="phone"><i class="icon-phone-circled"></i> <?php echo e(getcong_widgets('contact_block2_phone')); ?></a></p>
        <p class="nopadding"><a href="mailto:<?php echo e(getcong_widgets('contact_block2_email')); ?>"><i class="icon-mail-3"></i> <?php echo e(getcong_widgets('contact_block2_email')); ?></a></p>
      </div>
    </div>
  </div>
  <!-- End row --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>