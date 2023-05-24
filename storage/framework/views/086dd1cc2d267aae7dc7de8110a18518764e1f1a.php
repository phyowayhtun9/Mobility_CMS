<?php $__env->startSection('head_title', $restaurant->restaurant_name.' Menu' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

 <!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="470">
  <div id="subheader">
    <div id="sub_content">
      <div id="thumb"><img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-b.jpg')); ?>" alt=""></div>
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
      <h1><?php echo e($restaurant->restaurant_name); ?></h1>
      <div><em><?php echo e(getcong_type('type')); ?></em></div>
      <div><i class="icon_pin"></i> <?php echo e($restaurant->restaurant_address); ?></div>
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
      <li><a href="#0">Home</a></li>
      <li><a href="<?php echo e(url('restaurants/')); ?>">Restaurants</a></li>
      <li><?php echo e($restaurant->restaurant_name); ?></li>
    </ul>
  </div>
</div>
<!-- Position --> 

<!-- Content ================================================== -->
<div class="container margin_60_35">
  <div id="container_pin">
    <div class="row">
      <div class="col-md-3">
        <p><a href="<?php echo e(URL::to('/')); ?>" class="btn_side">Back to search</a></p>
        <div class="box_style_1">
          <ul id="cat_nav">
            <?php foreach(\App\Categories::where('restaurant_id',$restaurant->id)->orderBy('category_name')->get() as $i=>$cat): ?>
            <li><a href="#<?php echo e(str_replace(' ','',$cat->category_name)); ?>" <?php if($i==0): ?>class="active"<?php endif; ?>><?php echo e($cat->category_name); ?></a></li>
            <?php endforeach; ?>

            
          </ul>
        </div>
        <!-- End box_style_1 -->
        
        <div class="box_style_2 hidden-xs" id="help"> <i class="icon_lifesaver"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong_widgets('need_help_phone')); ?>" class="phone"><?php echo e(getcong_widgets('need_help_phone')); ?></a> <small><?php echo e(getcong_widgets('need_help_time')); ?></small> </div>
      
      </div>
      <!-- End col-md-3 -->
      
      <div class="col-md-6">
        <div class="box_style_2" id="main_menu">
          <h2 class="inner">Menu</h2>
          <?php foreach(\App\Categories::where('restaurant_id',$restaurant->id)->orderBy('category_name')->get() as $n=>$cat): ?>
          <h3 <?php if($n==0): ?>class="nomargin_top"<?php endif; ?> id="<?php echo e(str_replace(' ','',$cat->category_name)); ?>"><?php echo e($cat->category_name); ?></h3>
           
          <table class="table table-striped cart-list">
            <thead>
              <tr>
                <th> Item </th>
                <th> Price </th>
                <th> Order </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach(\App\Menu::where('menu_cat',$cat->id)->orderBy('menu_name')->get() as $menu_item): ?>
              <tr>
                <td><h5><?php echo e($menu_item->menu_name); ?></h5>
                  <p> <?php echo e($menu_item->description); ?> </p></td>
                <td><strong><?php echo e(getcong('currency_symbol')); ?> <?php echo e($menu_item->price); ?></strong></td>
                <td class="options">
                  <?php if(Auth::check()): ?>

                    <a href="<?php echo e(URL::to('add_item/'.$menu_item->id)); ?>"><i class="icon_plus_alt2"></i></a>
                  
                  <?php else: ?>
                    
                    <a href="<?php echo e(URL::to('login')); ?>"><i class="icon_plus_alt2"></i></a>

                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          <hr>
          <?php endforeach; ?>
          
          
        </div>
        <!-- End box_style_1 --> 
      </div>
      <!-- End col-md-6 -->
      
       <div class="col-md-3">
        <div id="cart_box">
          <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
          
          <table class="table table_summary">
            <tbody>
              <?php foreach(\App\Cart::where('user_id',Auth::id())->orderBy('id')->get() as $n=>$cart_item): ?>
              <tr>
                <td><a href="<?php echo e(URL::to('delete_item/'.$cart_item->id)); ?>" class="remove_item"><i class="icon_minus_alt"></i></a> <strong><?php echo e($cart_item->quantity); ?>x</strong> <?php echo e($cart_item->item_name); ?> </td>
                <td><strong class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($cart_item->item_price); ?></strong></td>
              </tr>
              <?php endforeach; ?>
               
            </tbody>
          </table>
           
          <!-- Edn options 2 -->
          
          <hr>
          <?php if(DB::table('cart')->where('user_id', Auth::id())->sum('item_price')>0): ?>
          <table class="table table_summary">
            <tbody>
              
              <tr>
                <td class="total"> TOTAL <span class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($price = DB::table('cart')
                ->where('user_id', Auth::id())
                ->sum('item_price')); ?></span></td>
              </tr>
            </tbody>
          </table>
          <hr>
          <a class="btn_full" href="<?php echo e(URL::to('order_details')); ?>">Order now</a> </div>
          <?php else: ?>
            <a class="btn_full" href="#0">Empty Cart</a> </div>
          <?php endif; ?>
        <!-- End cart_box --> 
      </div>
      <!-- End col-md-3 --> 
      
    </div>
    <!-- End row --> 
  </div>
  <!-- End container pin --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>