<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		
		<h2>Order List</h2>
        <a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant_id)); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back Restaurant</a>
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>User Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Menu Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>                           
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($order_list as $i => $order): ?>
            <tr>
                <td><?php echo e(date('m-d-Y',$order->created_date)); ?></td>
                <td><?php echo e(\App\User::getUserFullname($order->user_id)); ?></td>
                <td><?php echo e(\App\User::getUserInfo($order->user_id)->mobile); ?></td>
                <td><?php echo e(\App\User::getUserInfo($order->user_id)->email); ?></td>
                <td><?php echo e(\App\User::getUserInfo($order->user_id)->address); ?></td>
                <td><?php echo e($order->item_name); ?></td>
                <td><?php echo e($order->quantity); ?></td>
                <td><?php echo e(getcong('currency_symbol')); ?><?php echo e($order->item_price); ?></td>
                <td><?php echo e($order->status); ?></td>
                <td class="text-center">
                <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Actions <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                    <li><a href="<?php echo e(url('admin/restaurants/view/'.$restaurant_id.'/orderlist/'.$order->id.'/Pending')); ?>"><i class="md md-lock"></i> Pending</a></li>
                                    <li><a href="<?php echo e(url('admin/restaurants/view/'.$restaurant_id.'/orderlist/'.$order->id.'/Processing')); ?>"><i class="md md-loop"></i> Processing</a></li>
                                    <li><a href="<?php echo e(url('admin/restaurants/view/'.$restaurant_id.'/orderlist/'.$order->id.'/Completed')); ?>"><i class="md md-done"></i> Completed</a></li>
                                    <li><a href="<?php echo e(url('admin/restaurants/view/'.$restaurant_id.'/orderlist/'.$order->id.'/Cancel')); ?>"><i class="md md-cancel"></i> Cancel</a></li>
                                    <li><a href="<?php echo e(url('admin/restaurants/view/'.$restaurant_id.'/orderlist/'.$order->id)); ?>"><i class="md md-delete"></i> Delete</a></li>
                                </ul>
                            </div> 
                
            </td>
                
                 
            </tr>
           <?php endforeach; ?>
             
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>