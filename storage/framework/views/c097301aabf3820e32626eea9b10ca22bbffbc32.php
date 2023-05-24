<?php $__env->startSection("content"); ?>

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <div id="sub_content">
      <h1><?php echo e($total_res); ?> results for <?php echo e($keyword); ?></h1>      
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
      <li>Restaurants</li>

    </ul>
  </div>
</div>
<!-- Position -->
 

<!-- Content ================================================== -->
<div class="container margin_60_35">
  <div class="row">

    <?php echo $__env->make("_particles.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <div class="col-md-9">
       
      <!--End tools -->
      
      <?php foreach($restaurants as $i => $restaurant): ?>

      <div class="strip_list wow fadeIn" data-wow-delay="0.<?php echo e($i); ?>s">
        <?php if($restaurant->review_avg >=4): ?><div class="ribbon_1"> Popular </div><?php endif; ?>
        <div class="row">
          <div class="col-md-9 col-sm-9">
            <div class="desc">
              <div class="thumb_strip"> 
                  <a href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>">

                    <img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg')); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>">

                  </a> 
              </div>
              <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                    
                <?php if($x < $restaurant->review_avg): ?>
                  <i class="icon_star voted"></i>
                <?php else: ?>
                  <i class="icon_star"></i>
                <?php endif; ?>
               
                <?php endfor; ?>
                (<small><a href="<?php echo e(URL::to('restaurants/'.$restaurant->restaurant_slug)); ?>">Read <?php echo e(\App\Review::getTotalReview($restaurant->id)); ?> reviews</a></small>)
              </div>
              <h3><?php echo e($restaurant->restaurant_name); ?></h3>
              <div class="type"> <?php echo e($restaurant->type); ?> </div>
              <div class="location"><?php echo e($restaurant->restaurant_address); ?>  </div>
              
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="go_to">
              <div> <a href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>" class="btn_1">View Menu</a> </div>
            </div>
          </div>
        </div>
        <!-- End row--> 
      </div>
      <!-- End strip_list-->
      <?php endforeach; ?>
      
       
    </div>
    <!-- End col-md-9--> 
    
  </div>
  <!-- End row --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>