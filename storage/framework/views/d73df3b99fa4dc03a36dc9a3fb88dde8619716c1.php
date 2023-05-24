<?php $__env->startSection('head_title', 'My Orders' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>" data-natural-width="1400" data-natural-height="470">
  <div id="subheader">
    <div id="sub_content"> 
      <h1>My Orders</h1>
       
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
      <li>My Orders</li>
    </ul>
  </div>
</div>
<!-- Position --> 


<!-- Content ================================================== --> 
 <div class="container margin_60_35">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
                <?php echo e(Session::get('flash_message')); ?>

            </div>
  <?php endif; ?>
      <div class="box_style_2">

        <h2 class="inner">Order List</h2>        
       
        <table class="table table-striped nomargin">
          <tbody>
              <tr>
                  <th>Date</th>
                  <th>Restaurant</th>
                  <th>Menu Name</th> 
                  <th>Quantity</th>                 
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
            <?php foreach($order_list as $order_item): ?>
                 
                <tr>
                <td><?php echo e(date('m-d-Y',$order_item->created_date)); ?></td> 
                <td><a href="<?php echo e(url('restaurants/'.\App\Restaurants::getRestaurantsInfo($order_item->restaurant_id)->restaurant_slug)); ?>" class="text-regular"><?php echo e(\App\Restaurants::getRestaurantsInfo($order_item->restaurant_id)->restaurant_name); ?></a>
                </td> 
                <td><?php echo e($order_item->item_name); ?> </td>
                <td><strong class=""><?php echo e($order_item->quantity); ?></strong></td>
                <td><strong class=""><?php echo e(getcong('currency_symbol')); ?><?php echo e($order_item->item_price); ?></strong></td>
                <td><strong class=""><?php echo e($order_item->status); ?></strong></td>
                <?php if($order_item->status!='Cancel' and $order_item->status!='Completed'): ?>

                <td><a href="<?php echo e(URL::to('cancel_order/'.$order_item->id)); ?>" class=""><strong>Cancel</strong></a></td>
                <?php else: ?>
                <td></td>
                <?php endif; ?>
              </tr>
              <?php endforeach; ?>
 
             
          </tbody>
        </table>
        <br>
         
      </div>
    </div>
  </div>
  <!-- End row --> 
</div>
<!-- End container --> 
<!-- End Content =============================================== --> 



<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>