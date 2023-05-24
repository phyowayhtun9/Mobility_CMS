<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("_particles.slider", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if(getcong('service_section')!=0): ?>
<?php echo $__env->make("_particles.services", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('about_section')!=0): ?>
<?php echo $__env->make("_particles.about", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('portfolio_section')!=0): ?>
<?php echo $__env->make("_particles.portfolio", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('achivement_section')!=0): ?>
<?php echo $__env->make("_particles.achivement", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php endif; ?>

<?php if(getcong('team_section')!=0): ?>
<?php echo $__env->make("_particles.team", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('features_section')!=0): ?>
<?php echo $__env->make("_particles.features", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('testimonials_section')!=0): ?>
<?php echo $__env->make("_particles.testimonials", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('whychoose_section')!=0): ?>
<?php echo $__env->make("_particles.whychoose", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('our_clients_section')!=0): ?>
<?php echo $__env->make("_particles.clients", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(getcong('contact_us_section')!=0): ?>
<?php echo $__env->make("_particles.contact", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>