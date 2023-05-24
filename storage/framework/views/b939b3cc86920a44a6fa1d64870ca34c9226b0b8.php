<?php $__env->startSection('head_title', 'Order Confirmed' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <div id="sub_content">
      <h1>Place your order</h1>
      <div class="bs-wizard">
        <div class="col-xs-6 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <a href="#0" class="bs-wizard-dot"></a> </div>
       
        <div class="col-xs-6 bs-wizard-step active">
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
      <li>Order Confirmed</li>
    </ul>
  </div>
</div>
<!-- Position --> 


<!-- Content ================================================== --> 
 <div class="container margin_60_35">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="box_style_2">
        <h2 class="inner">Order confirmed!</h2>
        <div id="confirm"> <i class="icon_check_alt2"></i>
          <h3>Thank you!</h3>
          
        </div>
        <h4>Summary</h4>
        <table class="table table-striped nomargin">
          <tbody>
            
            <?php foreach(\App\Order::where('user_id',Auth::id())->where('created_date', '=', strtotime(date('Y-m-d')))->orderBy('id')->get() as $n=>$order_item): ?>
                <tr>
                    <td><strong><?php echo e($order_item->quantity); ?>x</strong> <?php echo e($order_item->item_name); ?> </td>
                    <td><strong class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($order_item->item_price); ?></strong></td>
                </tr>
              <?php endforeach; ?>
 
            <tr>
              <td class="total_confirm"> TOTAL </td>
              <td class="total_confirm"><span class="pull-right">
                <?php echo e(getcong('currency_symbol')); ?><?php echo e($price = DB::table('restaurant_order')->where('user_id', Auth::id())->where('created_date', '=', strtotime(date('Y-m-d')))
                ->sum('item_price')); ?></span></td>
            </tr>
          </tbody>
        </table>
        <br>
        <a class="btn_full" href="<?php echo e(URL::to('myorder')); ?>">My Order</a> </div>
      </div>
    </div>
  </div>
  <!-- End row --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 



<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>