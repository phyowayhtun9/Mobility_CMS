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
            <a href="#footer_widget" aria-controls="footer_widget" role="tab" data-toggle="tab">Footer Widgets</a>
        </li>
        <li role="presentation">
            <a href="#followus" aria-controls="followus" role="tab" data-toggle="tab">Follow Us</a>
        </li>
        <li role="presentation">
            <a href="#recent_popular_posts" aria-controls="recent_popular_posts" role="tab" data-toggle="tab">Recent & Popular Post</a>
        </li>        
        <li role="presentation">
            <a href="#featuredpost" aria-controls="featuredpost" role="tab" data-toggle="tab">Featured News</a>
        </li>
        <li role="presentation">
            <a href="#advertise" aria-controls="advertise" role="tab" data-toggle="tab">Advertise</a>
        </li> 
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="footer_widget">             
            <?php echo Form::open(array('url' => 'admin/footerwidgets','class'=>'form-horizontal padding-15','name'=>'footerwidget_form','id'=>'footerwidget_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                
                  
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">About Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="about_news_title" value="<?php echo e($widgets->about_news_title); ?>" class="form-control" value="">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">About Site</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="about_news" class="form-control" rows="5" placeholder="A few words about site"><?php echo e($widgets->about_news); ?></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Social Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_media_title" value="<?php echo e($widgets->social_media_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Social Media Embed</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="social_media_code" class="form-control" rows="5"><?php echo e($widgets->social_media_code); ?></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Contact Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_title" value="<?php echo e($widgets->contact_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="contact_address" class="form-control" rows="5"><?php echo e($widgets->contact_address); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_phone" value="<?php echo e($widgets->contact_phone); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="contact_email" value="<?php echo e($widgets->contact_email); ?>" class="form-control" value="">
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
                    <label for="" class="col-sm-3 control-label">Linkedin URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_linkedin" value="<?php echo e($widgets->social_linkedin); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Dribbble URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_dribbble" value="<?php echo e($widgets->social_dribbble); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Youtube URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_youtube" value="<?php echo e($widgets->social_youtube); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Behance URL</label>
                    <div class="col-sm-9">
                        <input type="text" name="social_behance" value="<?php echo e($widgets->social_behance); ?>" class="form-control" value="">
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
        
        <div role="tabpanel" class="tab-pane" id="recent_popular_posts">
            
            <?php echo Form::open(array('url' => 'admin/recentpopular','class'=>'form-horizontal padding-15','name'=>'recentpopular_form','id'=>'recentpopular_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Recent Posts Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="recent_posts_title" value="<?php echo e($widgets->recent_posts_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Recent Post Limit</label>
                    <div class="col-sm-9"> 
                        <input type="number" name="recent_posts_limit" value="<?php echo e($widgets->recent_posts_limit); ?>" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Popular Posts Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="popular_posts_title" value="<?php echo e($widgets->popular_posts_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Popular Post Limit</label>
                    <div class="col-sm-9"> 
                        <input type="number" name="popular_posts_limit" value="<?php echo e($widgets->popular_posts_limit); ?>" class="form-control"/>
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
        <div role="tabpanel" class="tab-pane" id="featuredpost">
            
            <?php echo Form::open(array('url' => 'admin/featuredpost','class'=>'form-horizontal padding-15','name'=>'featuredpost_form','id'=>'featuredpost_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Featured Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="featured_title" value="<?php echo e($widgets->featured_title); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Post Limit</label>
                    <div class="col-sm-9"> 
                        <input type="number" name="featured_post_limit" value="<?php echo e($widgets->featured_post_limit); ?>" class="form-control"/>
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
        
        <div role="tabpanel" class="tab-pane" id="advertise">
            
            <?php echo Form::open(array('url' => 'admin/advertise','class'=>'form-horizontal padding-15','name'=>'advertise_form','id'=>'advertise_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Header Advertise</label>
                    <div class="col-sm-9">                         
                        <textarea type="text" name="header_advertise" class="form-control" rows="5"><?php echo e($widgets->header_advertise); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Sidebar Advertise</label>
                    <div class="col-sm-9">                         
                        <textarea type="text" name="sidebar_advertise" class="form-control" rows="5"><?php echo e($widgets->sidebar_advertise); ?></textarea>
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