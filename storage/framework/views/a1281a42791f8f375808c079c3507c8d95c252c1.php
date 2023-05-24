<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($user->name) ? 'Edit: '. $user->name : 'Add User'); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/users')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                <?php echo Form::open(array('url' => array('admin/users/adduser'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                <input type="hidden" name="id" value="<?php echo e(isset($user->id) ? $user->id : null); ?>">
                  
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="<?php echo e(isset($user->name) ? $user->name : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" value="<?php echo e(isset($user->email) ? $user->email : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Profile Picture</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($user->image_icon)): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/members/'.$user->image_icon.'-s.jpg')); ?>" width="80" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image_icon" class="filestyle"> 
                            </div>
                        </div>
	
                    </div>
                </div>
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($user->name) ? 'Edit Editor ' : 'Add Editor'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>