<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($user->id) ? 'Edit: User' : 'Add User'); ?></h2>
		
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
                    <label for="" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="first_name" value="<?php echo e(isset($user->first_name) ? $user->first_name : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="last_name" value="<?php echo e(isset($user->last_name) ? $user->last_name : null); ?>" class="form-control">
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
                    <label for="" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-9">
                        <input type="text" name="mobile" value="<?php echo e(isset($user->mobile) ? $user->mobile : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" name="city" value="<?php echo e(isset($user->city) ? $user->city : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Postal Code</label>
                    <div class="col-sm-9">
                        <input type="text" name="postal_code" value="<?php echo e(isset($user->postal_code) ? $user->postal_code : null); ?>" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        
                        <textarea name="address" cols="30" rows="5" class="form-control"><?php echo e(isset($user->address) ? $user->address : null); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">User Type</label>
                    <div class="col-sm-4">
                        <select id="basic" name="usertype" class="selectpicker show-tick form-control">
                               <?php if(isset($user->usertype)): ?>  
                                    <option value="Owner" <?php if($user->usertype=='Owner'): ?> selected <?php endif; ?> >Owner</option>
                                    <option value="User" <?php if($user->usertype=='User'): ?> selected <?php endif; ?> >User</option>
                                     
                                <?php else: ?>

                                    <option value="Owner">Owner</option>
                                    <option value="User">User</option> 
                                
                                <?php endif; ?>                          
                            
                        </select>
                    </div>
                </div>                  
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($user->name) ? 'Edit User ' : 'Add User'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>