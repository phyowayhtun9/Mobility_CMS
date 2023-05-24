<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($service->service_title) ? 'Edit Service' : 'Add Service'); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/services')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
	<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
	<?php endif; ?>
	 <?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
   
   	<div class="panel panel-default">
            <div class="panel-body">
                <?php echo Form::open(array('url' => array('admin/services/addservice'),'class'=>'form-horizontal padding-15','name'=>'services_form','id'=>'services_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                
                 
                <input type="hidden" name="id" value="<?php echo e(isset($service->id) ? $service->id : null); ?>">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="service_title" value="<?php echo e(isset($service->service_title) ? $service->service_title : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Text</label>
                      <div class="col-sm-9">
                        <input type="text" name="service_text" value="<?php echo e(isset($service->service_text) ? $service->service_text : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Icon</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($service->service_icon)): ?>
                                 
                                    <img src="<?php echo e(URL::asset('upload/service/'.$service->service_icon.'-b.jpg')); ?>" width="70" alt="service">
                                <?php endif; ?>
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="service_icon" class="filestyle"> 
                                <small class="text-muted bold">Size 110x110px</small>
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($service->id) ? 'Edit Service ' : 'Add Service'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>