<?php $__env->startSection("content"); ?>

<div id="main">
	 <br/>
    <div class="panel panel-primary" style="height:470px;">
        <div class="panel-body text-center" style="padding: 15%;">
            <h1 class="margin-b-none">Welcome Admin</h1>
 
            <div class="text-center">
                <img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="logo">

            </div>
        </div>
    </div>
 
    
 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>