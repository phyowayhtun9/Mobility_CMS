<?php $__env->startSection('title', trans('messages.final.title')); ?>
<?php $__env->startSection('container'); ?>
    <p class="paragraph"><?php echo e(session('message')['message']); ?></p>
    <p class="paragraph"><b>We create an admin account for you by default</b></p>
    <p class="paragraph">Email: admin@admin.com</p>
    <p class="paragraph">Password: admin</p>
    <div class="buttons">
        <a href="<?php echo e(URL::to('/admin')); ?>" class="button"><?php echo e(trans('messages.final.exit')); ?></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>