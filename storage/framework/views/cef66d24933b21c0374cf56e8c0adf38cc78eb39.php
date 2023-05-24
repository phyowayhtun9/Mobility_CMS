<?php $__env->startSection('head_title', $restaurant->restaurant_name .' | '.getcong('site_name') ); ?>

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
              (<small><a href="#0">Read <?php echo e($total_review); ?> reviews</a></small>)
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
  <div class="row">
    <div class="col-md-4">
       
      <div class="box_style_2">
        <h4 class="nomargin_top">Opening time <i class="icon_clock_alt pull-right"></i></h4>
        <ul class="opening_list">
          <li>Monday<span><?php echo e($restaurant->open_monday); ?></span></li>
          <li>Tuesday<span><?php echo e($restaurant->open_tuesday); ?></span></li>
          <li>Wednesday <span><?php echo e($restaurant->open_wednesday); ?></span></li>
          <li>Thursday<span><?php echo e($restaurant->open_thursday); ?></span></li>
          <li>Friday<span><?php echo e($restaurant->open_friday); ?></span></li>
          <li>Saturday<span><?php echo e($restaurant->open_saturday); ?></span></li>
          <li>Sunday <span><?php echo e($restaurant->open_sunday); ?></span></li>
        </ul>
      </div>
      <div class="box_style_2 hidden-xs" id="help"> <i class="icon_lifesaver"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong_widgets('need_help_phone')); ?>" class="phone"><?php echo e(getcong_widgets('need_help_phone')); ?></a> <small><?php echo e(getcong_widgets('need_help_time')); ?></small> </div>
    </div>
    <div class="col-md-8">
      <div class="box_style_2">
        <h2 class="inner">Description</h2>
         
          <?php echo $restaurant->restaurant_description; ?>


        <div id="summary_review">
          <div id="general_rating"> <?php echo e($total_review); ?> Reviews
            <div class="rating"> 
              <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < $restaurant->review_avg): ?>
                      <i class="icon_star voted"></i>
                    <?php else: ?>
                      <i class="icon_star"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?>
            </div>
          </div>
          <div class="row" id="rating_summary">
            <div class="col-md-6">
              <ul>
                <li>Food Quality 
                  <div class="rating">                      
                    <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('food_quality')): ?>
                      <i class="icon_star voted"></i>
                    <?php else: ?>
                      <i class="icon_star"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?>
                  </div>
                </li>
                <li>Price
                  <div class="rating"> 
                    <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('price')): ?>
                      <i class="icon_star voted"></i>
                    <?php else: ?>
                      <i class="icon_star"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul>
                <li>Punctuality
                  <div class="rating"> 
                    <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('punctuality')): ?>
                      <i class="icon_star voted"></i>
                    <?php else: ?>
                      <i class="icon_star"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?> 
                  </div>
                </li>
                <li>Courtesy
                  <div class="rating"> 
                    <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('courtesy')): ?>
                      <i class="icon_star voted"></i>
                    <?php else: ?>
                      <i class="icon_star"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?>  
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End row -->
          <hr class="styled">
            <?php if(Auth::check() and \App\Review::checkUserReview(Auth::id(),$restaurant->id)==''): ?>
            
              <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">
            Leave a review</a>
            
            <?php elseif(\App\Review::checkUserReview(Auth::id(),$restaurant->id)!=''): ?>

              <a href="#0" class="btn_1 add_bottom_15">
            Already reviewed</a>

            <?php else: ?>

               <a href="<?php echo e(URL::to('login')); ?>" class="btn_1 add_bottom_15">
            Leave a review</a> 
            <?php endif; ?>
            

           

        </div>
        <!-- End summary_review -->
        <?php foreach($reviews as $i => $review): ?>
        <div class="review_strip_single"> <img src="<?php echo e(URL::asset('site_assets/img/avatar2.jpg')); ?>" alt="" class="img-circle"> <small> - <?php echo e(date('d F Y',$review->date)); ?> -</small>
          <h4><?php echo e(\App\User::getUserFullname($review->user_id)); ?> </h4>
          <p> <?php echo e($review->review_text); ?> </p>
          <div class="row">
            <div class="col-md-3">
              <div class="rating"> 
                  <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->food_quality): ?>
                    <i class="icon_star voted"></i>
                  <?php else: ?>
                    <i class="icon_star"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?>
              </div>
              Food Quality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->price): ?>
                    <i class="icon_star voted"></i>
                  <?php else: ?>
                    <i class="icon_star"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?>
              </div>
              Price 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
               <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->punctuality): ?>
                    <i class="icon_star voted"></i>
                  <?php else: ?>
                    <i class="icon_star"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?> 
              </div>
              Punctuality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->courtesy): ?>
                    <i class="icon_star voted"></i>
                  <?php else: ?>
                    <i class="icon_star"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?>
              </div>
              Courtesy 
            </div>
          </div>
          <!-- End row --> 
        </div>
        <!-- End review strip -->
        <?php endforeach; ?>
      
      <?php echo $__env->make('_particles.pagination', ['paginator' => $reviews], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        
        
        
      </div>
      <!-- End box_style_1 --> 
    </div>
  </div>
  <!-- End row --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 


<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
      
        <?php echo Form::open(array('url' => 'restaurants/'.$restaurant->restaurant_slug.'/restaurant_review','class'=>'popup-form','name'=>'review','id'=>'review','role'=>'form')); ?> 
        <div class="login_icon"><i class="icon_comment_alt"></i></div>
        <input name="restaurant_id" id="restaurant_id" type="hidden" value="<?php echo e($restaurant->id); ?>">
          
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white" name="food_quality" id="food_quality" required>
              <option value="">Food Quality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="price" id="price" required>
              <option value="">Price</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white"  name="punctuality" id="punctuality" required>
              <option value="">Punctuality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="courtesy" id="courtesy" required>
              <option value="">Courtesy</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        <textarea name="review_text" id="review_text" class="form-control form-white" style="height:100px" placeholder="Write your review"></textarea>
        
        <input type="submit" value="Submit" class="review_btn-submit" id="submit-review">
      <?php echo Form::close(); ?> 
      <div id="message-review"></div>
    </div>
  </div>
</div>
<!-- End Register modal --> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>