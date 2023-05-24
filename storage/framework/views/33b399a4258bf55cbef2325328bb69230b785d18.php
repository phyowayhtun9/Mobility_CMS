<?php $__env->startSection("content"); ?>

<div id="main">
    <div class="page-header">
        <h2><?php echo e($restaurant->restaurant_name); ?> Overview</h2>

        <a href="<?php echo e(URL::to('admin/restaurants')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
    </div>
    
 
<div class="row">
    
    <?php if(Auth::user()->usertype=='Admin'): ?>
        
        <a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant->id.'/categories')); ?>">
        <div class="col-sm-6 col-md-3">
        <div class="panel panel-orange panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y">Categories</h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                 <?php echo e($categories_count); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-folder fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>
    <?php endif; ?>
     
     
    <a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant->id.'/menu')); ?>">
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-green panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y">Menu</h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                 <?php echo e($menu_count); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-coffee fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </a>

    <a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant->id.'/orderlist')); ?>">
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-grey panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y">Order</h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                 <?php echo e($order_count); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-cart-plus fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </a>

    <a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant->id.'/review')); ?>">
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-primary panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y">Review</h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                 <?php echo e($review_count); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-cart-plus fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </a>
    
     
</div>
 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>