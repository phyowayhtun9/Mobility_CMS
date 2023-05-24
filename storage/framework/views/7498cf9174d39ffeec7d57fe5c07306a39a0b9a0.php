<?php $__env->startSection('head_title', $restaurant->restaurant_name.' Menu' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

  <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <div id="sub_content" class="animated zoomIn">
    <div class="col-md-2 col-sm-3">
      <div id="thumb"><img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-b.jpg')); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>"></div>
    </div>  
    <div class="col-md-10 col-sm-9">  
      <h1><?php echo e($restaurant->restaurant_name); ?></h1>
      <div class="sub_cont_rt"><?php echo e($restaurant->type); ?></div>
      <div class="sub_cont_lt"><i class="fa fa-map-marker"></i><?php echo e($restaurant->restaurant_address); ?></div>
      <div class="rating"> 
         <?php for($x = 0; $x < 5; $x++): ?>
                    
                <?php if($x < $restaurant->review_avg): ?>
                  <i class="fa fa-star"></i>
                <?php else: ?>
                  <i class="fa fa-star fa fa-star-o"></i>
                <?php endif; ?>
               
                <?php endfor; ?> 
                (<small><a href="<?php echo e(URL::to('restaurants/'.$restaurant->restaurant_slug)); ?>"> Read <?php echo e(\App\Review::getTotalReview($restaurant->id)); ?> Reviews </a></small>)
      </div>
      <div class="rstl_list_btn"><a href="<?php echo e(URL::to('restaurants/'.$restaurant->restaurant_slug)); ?>">View Restaurant</a></div>
      </div>
    </div>
      </div>
    </div>
  </div>
  
  <div class="restaurant_list_detail">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9 col-sm-7 col-xs-12">         
      <div id="main_menu" class="box_style_2">
        <h2 class="inner">Menu List</h2>
         <?php foreach(\App\Categories::where('restaurant_id',$restaurant->id)->orderBy('category_name')->get() as $n=>$cat): ?>
        <h3 id="<?php echo e($cat->category_name); ?>" class="nomargin_top"><?php echo e($cat->category_name); ?></h3>
        <table class="table table-striped cart-list">
          <thead>
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Order</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach(\App\Menu::where('menu_cat',$cat->id)->orderBy('menu_name')->get() as $menu_item): ?>
          <tr>
            <td>

              <div class="rstl_img"><a href="#menu_<?php echo e($menu_item->id); ?>">
                <?php if($menu_item->menu_image): ?>
                <img src="<?php echo e(URL::asset('upload/menu/'.$menu_item->menu_image.'-s.jpg')); ?>" />
                <?php else: ?>
                <img src="<?php echo e(URL::asset('upload/menu_img_s.png')); ?>" />
                <?php endif; ?>
              </a></div>
                        <div id="menu_<?php echo e($menu_item->id); ?>" class="modalDialog">
                          <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2><?php echo e($menu_item->menu_name); ?></h2>
                              <?php if($menu_item->menu_image): ?>
                              <img src="<?php echo e(URL::asset('upload/menu/'.$menu_item->menu_image.'-b.jpg')); ?>" />
                               <?php else: ?>
                              <img src="<?php echo e(URL::asset('upload/menu_img_s.png')); ?>" />
                              <?php endif; ?> 
                          </div>
                        </div>
                        <div class="rstl_img_contant">
                        <h5><?php echo e($menu_item->menu_name); ?></h5>
                        <p><?php echo e($menu_item->description); ?></p>
                        </div>

              
            </td>
            <td><strong><?php echo e(getcong('currency_symbol')); ?> <?php echo e($menu_item->price); ?></strong></td>
            <td class="options">
                <?php if(Auth::check()): ?>

                    <a href="<?php echo e(URL::to('add_item/'.$menu_item->id)); ?>"><i class="fa fa-plus-square-o"></i></a>
                  
                  <?php else: ?>
                    
                    <a href="<?php echo e(URL::to('login')); ?>"><i class="fa fa-plus-square-o"></i></a>

                  <?php endif; ?> 
               
          </tr>
          <?php endforeach; ?>
          
          </tbody>
        </table>
        <hr>
        <?php endforeach; ?>

         
        </div>
           </div>
         
          <?php echo $__env->make("_particles.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>