<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($portfolio->title) ? 'Edit Portfolio' : 'Add Portfolio'); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/portfolio')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                <?php echo Form::open(array('url' => array('admin/portfolio/addportfolio'),'class'=>'form-horizontal padding-15','name'=>'portfolio_form','id'=>'portfolio_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                
                 
                <input type="hidden" name="id" value="<?php echo e(isset($portfolio->id) ? $portfolio->id : null); ?>">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                        <select id="basic" name="category" class="selectpicker show-tick form-control">
                            <option value="">Select Category</option>
                            
                            <?php foreach($categories as $i => $category): ?>    
                                <?php if(isset($portfolio->cat_id) && $portfolio->cat_id==$category->id): ?>  
                                    <option value="<?php echo e($category->id); ?>" selected ><?php echo e($category->category_name); ?></option>
                                     
                                <?php else: ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option> 
                                <?php endif; ?>                          
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="title" value="<?php echo e(isset($portfolio->title) ? $portfolio->title : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($portfolio->image)): ?>
                                 
                                    <img src="<?php echo e(URL::asset('upload/portfolio/'.$portfolio->image.'-b.jpg')); ?>" width="70" alt="portfolio">
                                <?php endif; ?>
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle"> 
                                <small class="text-muted bold">Size 650x550px</small>
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($portfolio->id) ? 'Edit Portfolio ' : 'Add Portfolio'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>