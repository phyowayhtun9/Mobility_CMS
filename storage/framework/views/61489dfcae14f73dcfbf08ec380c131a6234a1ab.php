<?php $__env->startSection('head_title', $restaurant->restaurant_name .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

 <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <div id="sub_content" class="animated zoomIn">
    <div class="col-md-2 col-sm-3">
      <div id="thumb"><img alt="<?php echo e($restaurant->restaurant_name); ?>" src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-b.jpg')); ?>"></div>
    </div>  
    <div class="col-md-10 col-sm-9">  
      <h1><?php echo e($restaurant->restaurant_name); ?></h1>
      <div class="sub_cont_rt"><?php echo e(getcong_type('type')); ?></div>
      <div class="sub_cont_lt"><i class="fa fa-map-marker"></i> <?php echo e($restaurant->restaurant_address); ?></div>
      <div class="rating"> 
        <?php for($x = 0; $x < 5; $x++): ?>
                  
              <?php if($x < $restaurant->review_avg): ?>
                <i class="fa fa-star"></i>
              <?php else: ?>
                <i class="fa fa-star fa fa-star-o"></i>
              <?php endif; ?>
             
              <?php endfor; ?>
              (<small><a href="#0">Read <?php echo e($total_review); ?> Reviews</a></small>)

        
      </div>
      </div>
    </div>
      </div>
    </div>
  </div>

 

<div class="restaurant_list_detail">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9 col-sm-7 col-xs-12">         
      <div class="box_style_2">
              <h2 class="inner">Description</h2>
              <span class="detail_con_text"><?php echo $restaurant->restaurant_description; ?></span>
              <div id="summary_review">
                <div id="general_rating"> <?php echo e($total_review); ?> Reviews
                  <div class="rating"> 
                    <?php for($x = 0; $x < 5; $x++): ?>
                  
                    <?php if($x < $restaurant->review_avg): ?>
                      <i class="fa fa-star"></i>
                    <?php else: ?>
                      <i class="fa fa-star fa fa-star-o"></i>
                    <?php endif; ?>
                   
                    <?php endfor; ?>
                  </div>
                </div>
                <div id="rating_summary" class="row">
                  <div class="col-md-6">
                    <ul>
                      <li>Food Quality
                        <div class="rating"> 
                          <?php for($x = 0; $x < 5; $x++): ?>
                  
                          <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('food_quality')): ?>
                            <i class="fa fa-star"></i>
                          <?php else: ?>
                            <i class="fa fa-star fa fa-star-o"></i>
                          <?php endif; ?>
                         
                          <?php endfor; ?> 
                        </div>
                      </li>
                      <li>Price
                        <div class="rating"> 
                          <?php for($x = 0; $x < 5; $x++): ?>
                  
                          <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('price')): ?>
                            <i class="fa fa-star"></i>
                          <?php else: ?>
                            <i class="fa fa-star fa fa-star-o"></i>
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
                            <i class="fa fa-star"></i>
                          <?php else: ?>
                            <i class="fa fa-star fa fa-star-o"></i>
                          <?php endif; ?>
                         
                          <?php endfor; ?>  
                        </div>
                      </li>
                      <li>Courtesy
                        <div class="rating"> 
                           <?php for($x = 0; $x < 5; $x++): ?>
                  
                          <?php if($x < DB::table('restaurant_review')->where('restaurant_id', $restaurant->id)->avg('courtesy')): ?>
                            <i class="fa fa-star"></i>
                          <?php else: ?>
                            <i class="fa fa-star fa fa-star-o"></i>
                          <?php endif; ?>
                         
                          <?php endfor; ?>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
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
               <?php foreach($reviews as $i => $review): ?>
        <div class="review_strip_single"> <img src="<?php echo e(URL::asset('site_assets/img/male-icon.png')); ?>" alt="" class="img-circle"> <small> - <?php echo e(date('d F Y',$review->date)); ?> -</small>
          <h4><?php echo e(\App\User::getUserFullname($review->user_id)); ?> </h4>
          <p> <?php echo e($review->review_text); ?> </p>
          <div class="row">
            <div class="col-md-3">
              <div class="rating"> 
                  <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->food_quality): ?>
                    <i class="fa fa-star"></i>
                  <?php else: ?>
                    <i class="fa fa-star fa fa-star-o"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?>
              </div>
              Food Quality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->price): ?>
                    <i class="fa fa-star"></i>
                  <?php else: ?>
                    <i class="fa fa-star fa fa-star-o"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?>
              </div>
              Price 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
               <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->punctuality): ?>
                    <i class="fa fa-star"></i>
                  <?php else: ?>
                    <i class="fa fa-star fa fa-star-o"></i>
                  <?php endif; ?>
                 
                  <?php endfor; ?> 
              </div>
              Punctuality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                  
                  <?php if($x < $review->courtesy): ?>
                    <i class="fa fa-star"></i>
                  <?php else: ?>
                    <i class="fa fa-star fa fa-star-o"></i>
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
           </div>
        <div class="col-md-3 col-sm-5 col-xs-12 side-bar">   
    <div class="box_style_2 sidebar_time_list">
          <h4 class="nomargin_top">Opening time <i class="fa fa-clock-o pull-right"></i></h4>
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
           
     <div id="help" class="box_style_2"> 
      <i class="fa fa-life-bouy"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong_widgets('need_help_phone')); ?>" class="phone"><?php echo e(getcong_widgets('need_help_phone')); ?></a> <small><?php echo e(getcong_widgets('need_help_time')); ?></small> 
      </div>
        </div>
      </div>
    </div>
  </div>


<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="fa fa-times-circle-o"></i></a>
      
        <?php echo Form::open(array('url' => 'restaurants/'.$restaurant->restaurant_slug.'/restaurant_review','class'=>'popup-form','name'=>'review','id'=>'review','role'=>'form')); ?> 
        <div class="login_icon"><i class="fa fa-comments-o"></i></div>
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