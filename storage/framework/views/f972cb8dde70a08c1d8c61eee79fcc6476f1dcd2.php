<!-- SubHeader =============================================== -->
<section class="parallax-window" id="home" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('home_bg_image'))); ?>" data-natural-width="1400" data-natural-height="550">
  <div id="subheader">
    <div id="sub_content">
      <h1>Order Delicious Food Online!</h1>      
       
        <?php echo Form::open(array('url' => 'restaurants/search','class'=>'','id'=>'search','role'=>'form')); ?> 
        <div id="custom-search-input">
           
          <div class="input-group ">
            <input type="text" class=" search-query" name="search_keyword" placeholder="Restaurant name or address">
            <span class="input-group-btn">
            <input type="submit" class="btn_search" value="submit">
            </span> </div>

        </div>
      <?php echo Form::close(); ?> 
    </div>
    <!-- End sub_content --> 
  </div>
  <!-- End subheader -->
  <div id="count" class="hidden-xs">
    <ul>
      <li><span class="number"><?php echo e(getcong('total_restaurant')); ?></span> Restaurant</li>
      <li><span class="number"><?php echo e(getcong('total_people_served')); ?></span> People Served</li>
      <li><span class="number"><?php echo e(getcong('total_registered_users')); ?></span> Registered Users</li>
    </ul>
  </div>
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ --> 