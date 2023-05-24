<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($slider->slider_title) ? 'Edit Slider' : 'Add Slider'); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/sliders')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                <?php echo Form::open(array('url' => array('admin/sliders/addslider'),'class'=>'form-horizontal padding-15','name'=>'sliders_form','id'=>'sliders_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                
                 
                <input type="hidden" name="id" value="<?php echo e(isset($slider->id) ? $slider->id : null); ?>">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="slider_title" value="<?php echo e(isset($slider->slider_title) ? $slider->slider_title : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Sub Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="slider_sub_title" value="<?php echo e(isset($slider->slider_sub_title) ? $slider->slider_sub_title : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Slide</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($slider->slider_image)): ?>
                                 
                                    <img src="<?php echo e(URL::asset('upload/slider/'.$slider->slider_image.'-b.jpg')); ?>" width="200" alt="person">
                                <?php endif; ?>
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="slider_image" class="filestyle">
                                <small class="text-muted bold">Size 1600x900px</small> 
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($slider->id) ? 'Edit Slider ' : 'Add Slider'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>