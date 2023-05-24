<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> Widgets</h2>
		<a href="<?php echo e(URL::to('admin/dashboard')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
    <div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#about_contact_widget" aria-controls="about_contact_widget" role="tab" data-toggle="tab">About & Contact Page</a>
        </li>
        <li role="presentation">
            <a href="#followus" aria-controls="followus" role="tab" data-toggle="tab">Follow Us</a>
        </li>
        <li role="presentation">
            <a href="#need_help" aria-controls="need_help" role="tab" data-toggle="tab">Need Help?</a>
        </li>               
       
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="about_contact_widget">             
            <?php echo Form::open(array('url' => 'admin/about_contact_widgets','class'=>'form-horizontal padding-15','name'=>'about_contact_widgets_form','id'=>'about_contact_widgets_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                
                  
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">About Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="about_title" value="<?php echo e($widgets->about_title); ?>" class="form-control" value="">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">About Site</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="about_desc" class="summernote" rows="5" placeholder="A few words about site"><?php echo e($widgets->about_desc); ?></textarea>
                    </div>
                </div>
                <hr> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_title" value="<?php echo e($widgets->contact_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Block 1 Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block1_title" value="<?php echo e($widgets->contact_block1_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 1 Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="contact_block1_desc" class="form-control" rows="5"><?php echo e($widgets->contact_block1_desc); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 1 Phone</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block1_phone" value="<?php echo e($widgets->contact_block1_phone); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 1 Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block1_email" value="<?php echo e($widgets->contact_block1_email); ?>" class="form-control" value="">
                    </div>
                </div>
                    <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Block 2 Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block2_title" value="<?php echo e($widgets->contact_block2_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 2 Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="contact_block2_desc" class="form-control" rows="5"><?php echo e($widgets->contact_block2_desc); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 2 Phone</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block2_phone" value="<?php echo e($widgets->contact_block2_phone); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Block 2 Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_block2_email" value="<?php echo e($widgets->contact_block2_email); ?>" class="form-control" value="">
                    </div>
                </div>
                
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                         
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        <div role="tabpanel" class="tab-pane" id="followus">
            
            <?php echo Form::open(array('url' => 'admin/socialmedialink','class'=>'form-horizontal padding-15','name'=>'socialmedialink_form','id'=>'socialmedialink_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_facebook" value="<?php echo e($widgets->social_facebook); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Twitter URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_twitter" value="<?php echo e($widgets->social_twitter); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Google Plus URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_google" value="<?php echo e($widgets->social_google); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Instagram URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_instagram" value="<?php echo e($widgets->social_instagram); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Pinterest URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_pinterest" value="<?php echo e($widgets->social_pinterest); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Vimeo URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_vimeo" value="<?php echo e($widgets->social_vimeo); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Youtube URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_youtube" value="<?php echo e($widgets->social_youtube); ?>" class="form-control" value="">
                    </div>
                </div>
                
                 
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        
        <div role="tabpanel" class="tab-pane" id="need_help">
            
            <?php echo Form::open(array('url' => 'admin/need_help','class'=>'form-horizontal padding-15','name'=>'need_help_form','id'=>'need_help_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Need Help Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="need_help_title" value="<?php echo e($widgets->need_help_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9"> 
                        <input type="text" name="need_help_phone" value="<?php echo e($widgets->need_help_phone); ?>" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Time</label>
                    <div class="col-sm-9">
                        <input type="text" name="need_help_time" value="<?php echo e($widgets->need_help_time); ?>" class="form-control" value="">
                    </div>
                </div>
                 
              
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        
        
        
         
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>