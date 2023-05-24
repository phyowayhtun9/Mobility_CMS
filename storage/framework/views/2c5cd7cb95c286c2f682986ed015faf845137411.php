<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("_particles.sub_header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Content ================================================== --> 

<div class="white_bg">
  <div class="container margin_60">
    <div class="main_title">
      <h2 class="nomargin_top">Choose from Most Popular</h2>      
    </div>
    <div class="row">
      <div class="col-md-12"> 
        <?php foreach($restaurants as $i => $restaurant): ?>
        <div class="col-md-6"> 
        <a href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>" class="strip_list">
        <div class="ribbon_1">Popular</div>
        <div class="desc">
          <div class="thumb_strip"> <img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg')); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>"> </div>
          <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                    
                <?php if($x < $restaurant->review_avg): ?>
                  <i class="icon_star voted"></i>
                <?php else: ?>
                  <i class="icon_star"></i>
                <?php endif; ?>
               
                <?php endfor; ?>
                
              </div>
          <h3><?php echo e($restaurant->restaurant_name); ?></h3>
          <div class="type"> <?php echo e($restaurant->type); ?> </div>
          <div class="location"><?php echo e($restaurant->restaurant_address); ?>  </div>
          
        </div>
        <!-- End desc--> 
        </a><!-- End strip_list--> 
        </div>
        <?php endforeach; ?>
         
      </div>
      <!-- End col-md-6-->
       
    </div>
    <!-- End row --> 
    
  </div>
  <!-- End container --> 
</div>
<!-- End white_bg -->

<div class="high_light">
  <div class="container">
    <h3>Choose from over <?php echo e(\App\Restaurants::getTotalRestaurants()); ?> Restaurants</h3>     
    <a href="<?php echo e(URL::to('restaurants')); ?>">View all Restaurants</a> </div>
  <!-- End container --> 
</div>
<!-- End hight_light -->

 
<!-- End section --> 
<!-- End Content =============================================== --> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>