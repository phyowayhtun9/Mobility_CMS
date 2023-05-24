<?php $__env->startSection('head_title', 'Order Details' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <div id="sub_content">
      <h1>Place your order</h1>
      <div class="bs-wizard">
        <div class="col-xs-6 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <a href="#0" class="bs-wizard-dot"></a> </div>
       
        <div class="col-xs-6 bs-wizard-step disabled">
          <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Finish!</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <a href="#0" class="bs-wizard-dot"></a> </div>
      </div>
      <!-- End bs-wizard --> 
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
      <li>Order Details</li>
    </ul>
  </div>
</div>
<!-- Position --> 


<!-- Content ================================================== --> 
 <div class="container margin_60">
   
  <div class="row">
    <div class="col-md-3">
        <div class="box_style_2 hidden-xs" id="help"> <i class="icon_lifesaver"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong_widgets('need_help_phone')); ?>" class="phone"><?php echo e(getcong_widgets('need_help_phone')); ?></a> <small><?php echo e(getcong_widgets('need_help_time')); ?></small> </div>
     
    </div>  
    <div class="col-md-6">
        <div class="box_style_2" id="order_process">
          <h2 class="inner">Your order details</h2>
          <?php echo Form::open(array('url' => 'order_details','class'=>'','id'=>'order_details','role'=>'form')); ?> 

            <div class="message">
                        <!--<?php echo Html::ul($errors->all(), array('class'=>'alert alert-danger errors')); ?>-->
                                    <?php if(count($errors) > 0): ?>
                          <div class="alert alert-danger">
                          
                              <ul>
                                  <?php foreach($errors->all() as $error): ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      <?php endif; ?>
                                    
        </div>
        <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">             
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>

          <div class="form-group">
            <label>First name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e($user->first_name); ?>" placeholder="First name">
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="text" class="form-control" id="last_name" value="<?php echo e($user->last_name); ?>" name="last_name" placeholder="Last name">
          </div>
          <div class="form-group">
            <label>Telephone/mobile</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo e($user->mobile); ?>" class="form-control" placeholder="Telephone/mobile">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="Your email">
          </div>           
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" id="city" name="city" value="<?php echo e($user->city); ?>" class="form-control" placeholder="Your city">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Postal code</label>
                <input type="text" id="postal_code" name="postal_code" value="<?php echo e($user->postal_code); ?>" class="form-control" placeholder=" Your postal code">
              </div>
            </div>
          </div>
           
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label>Your full address</label>
              <textarea class="form-control" style="height:150px" placeholder="Address" name="address" id="address"><?php echo e($user->address); ?></textarea>
            </div>
          </div>
             
      
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
           
          <button type="submit" class="btn_full">Confirm your order</button>
        </div>

          <?php echo Form::close(); ?> 
          <?php else: ?>
            <a class="btn_full" href="#">Empty Cart</a> </div>
          <?php endif; ?>
        <!-- End cart_box --> 
      </div>
      <!-- End col-md-3 --> 
     
        
  </div>
  <!-- End row -->   
</div>
<!-- End white_bg -->

 

 
<!-- End section --> 
<!-- End Content =============================================== --> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>