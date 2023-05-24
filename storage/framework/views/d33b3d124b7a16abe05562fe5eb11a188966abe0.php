<div id="banner">
  <section>
  <div id="subheader">
    <div id="sub_content" class="animated zoomIn">
      <h1>Order Takeaway or Delivery Food</h1>
      <div class="container-4">
        <?php echo Form::open(array('url' => 'restaurants/search','class'=>'','id'=>'search','role'=>'form')); ?> 
          <input type="search" placeholder="Your Address or Postal Code..." name="search_keyword" id="search">
          <button class="icon" type="submit"><i class="fa fa-search"></i></button>
        <?php echo Form::close(); ?> 
    </div>
    </div>
  </div>
  <div class="hidden-xs" id="count">
    <ul>
      <li><span class="number"><?php echo e(getcong('total_restaurant')); ?></span> Restaurant</li>
      <li><span class="number"><?php echo e(getcong('total_people_served')); ?></span> People Served</li>
      <li><span class="number"><?php echo e(getcong('total_registered_users')); ?></span> Registered Users</li>
    </ul>
  </div>
  </section>
    <div class="flex-banner">
      <ul class="slides">
        <li><img src="<?php echo e(URL::asset('site_assets/img/slider_img/slider-img-1.jpg')); ?>" alt=""></li>
        <li><img src="<?php echo e(URL::asset('site_assets/img/slider_img/slider-img-2.jpg')); ?>" alt=""></li>
        <li><img src="<?php echo e(URL::asset('site_assets/img/slider_img/slider-img-3.jpg')); ?>" alt=""></li>
      </ul>
    </div>
  </div>