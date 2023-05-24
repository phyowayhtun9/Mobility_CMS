<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> Settings</h2>
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
            <a href="#account" aria-controls="account" role="tab" data-toggle="tab">General Settings</a>
        </li>
        <li role="presentation">
            <a href="#layout_settings" aria-controls="other_Settings" role="tab" data-toggle="tab">Layout Settings</a>
        </li>
        <li role="presentation">
            <a href="#share_comments" aria-controls="share_comments" role="tab" data-toggle="tab">AddThis, Facebook & Disqus Settings</a>
        </li>
        <li role="presentation">
            <a href="#other_Settings" aria-controls="other_Settings" role="tab" data-toggle="tab">Other Settings</a>
        </li>        
         
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="account">             
            <?php echo Form::open(array('url' => 'admin/settings','class'=>'form-horizontal padding-15','name'=>'account_form','id'=>'account_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Style</label>
                    <div class="col-sm-4">
                        <select id="basic" name="site_style" class="selectpicker show-tick form-control">
                        	 		
                        	 		<option value="">Default</option>
                        	 		
		                        	<option value="blue" <?php if($settings->site_style=='blue'): ?>selected <?php endif; ?>>Blue</option>
		                        	<option value="brown" <?php if($settings->site_style=='brown'): ?>selected <?php endif; ?> >Brown</option>
		                        	<option value="green" <?php if($settings->site_style=='green'): ?>selected <?php endif; ?> >Green</option>
		                        	<option value="green2" <?php if($settings->site_style=='green2'): ?>selected <?php endif; ?> >Green 2</option>
		                        	<option value="grey" <?php if($settings->site_style=='grey'): ?>selected <?php endif; ?> >Grey</option>
									<option value="greyish-blue" <?php if($settings->site_style=='greyish-blue'): ?>selected <?php endif; ?> >Greyish Blue</option>
									<option value="oldrose" <?php if($settings->site_style=='oldrose'): ?>selected <?php endif; ?> >Old Rose</option>
									<option value="orange" <?php if($settings->site_style=='orange'): ?>selected <?php endif; ?> >Orange</option>
									<option value="pink" <?php if($settings->site_style=='pink'): ?>selected <?php endif; ?> >Pink</option>
									<option value="purple" <?php if($settings->site_style=='purple'): ?>selected <?php endif; ?> >Purple</option>		
									<option value="red" <?php if($settings->site_style=='red'): ?>selected <?php endif; ?> >Red</option>
									<option value="yellow" <?php if($settings->site_style=='yellow'): ?>selected <?php endif; ?> >Yellow</option>
			                        	 
	                        	 
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->site_logo): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/'.$settings->site_logo)); ?>" width="150" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_logo" class="filestyle">
                                <small class="text-muted bold">Size 200x75px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
				<div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Favicon</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->site_favicon): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/'.$settings->site_favicon)); ?>" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_favicon" class="filestyle">
                                <small class="text-muted bold">Size 16x16px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="site_name" value="<?php echo e($settings->site_name); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="site_email" value="<?php echo e($settings->site_email); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Site Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_description" class="form-control" rows="5" placeholder="A few words about site"><?php echo e($settings->site_description); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Copyright Text</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_copyright" class="form-control" rows="5"><?php echo e($settings->site_copyright); ?></textarea>
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
        
        <div role="tabpanel" class="tab-pane" id="layout_settings">             
            <?php echo Form::open(array('url' => 'admin/layoutsettings','class'=>'form-horizontal padding-15','name'=>'layout_settings_form','id'=>'layout_settings_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Background Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->bg_image): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/'.$settings->bg_image)); ?>" alt="bg image" width="150">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="bg_image" class="filestyle">
                                 
                            </div>
                        </div>
	
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Home Slider</label>
                    <div class="col-sm-4">
                        <select id="basic" name="slider_type" class="selectpicker show-tick form-control"> 
                        	 		 
		                        	<option value="slider1" <?php if($settings->slider_type=='slider1'): ?>selected <?php endif; ?>>Slider 1</option>
		                        	<option value="slider2" <?php if($settings->slider_type=='slider2'): ?>selected <?php endif; ?> >Slider 2</option> 
		                         
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Home Page Layout</label>
                    <div class="col-sm-4">
                        <select id="basic" name="home_post_columns" class="selectpicker show-tick form-control"> 
                        	 		 
		                        	<option value="1cls" <?php if($settings->home_post_columns=='1cls'): ?>selected <?php endif; ?>>1 Column with Left Sidebar</option>
		                        	<option value="1crs" <?php if($settings->home_post_columns=='1crs'): ?>selected <?php endif; ?>>1 Column with Right Sidebar</option>
		                        	
		                        	<option value="2cls" <?php if($settings->home_post_columns=='2cls'): ?>selected <?php endif; ?>>2 Columns with Left Sidebar</option>
		                        	<option value="2crs" <?php if($settings->home_post_columns=='2crs'): ?>selected <?php endif; ?>>2 Columns with Right Sidebar</option>
		                        	<option value="2cns" <?php if($settings->home_post_columns=='2cns'): ?>selected <?php endif; ?>>2 Columns No Sidebar</option>
		                        	
		                        	<option value="3cls" <?php if($settings->home_post_columns=='3cls'): ?>selected <?php endif; ?>>3 Columns with Left Sidebar</option>
		                        	<option value="3crs" <?php if($settings->home_post_columns=='3crs'): ?>selected <?php endif; ?>>3 Columns with Right Sidebar</option>
		                        	<option value="3cns" <?php if($settings->home_post_columns=='3cns'): ?>selected <?php endif; ?>>3 Columns No Sidebar</option>
		                        	
		                        	 <option value="4cns" <?php if($settings->home_post_columns=='4cns'): ?>selected <?php endif; ?>>4 Columns No Sidebar</option>
		                         
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category Page Layout</label>
                    <div class="col-sm-4">
                        <select id="basic" name="category_post_columns" class="selectpicker show-tick form-control"> 
                        	 		 
		                        	<option value="1cls" <?php if($settings->category_post_columns=='1cls'): ?>selected <?php endif; ?>>1 Column with Left Sidebar</option>
		                        	<option value="1crs" <?php if($settings->category_post_columns=='1crs'): ?>selected <?php endif; ?>>1 Column with Right Sidebar</option>
		                        	
		                        	<option value="2cls" <?php if($settings->category_post_columns=='2cls'): ?>selected <?php endif; ?>>2 Columns with Left Sidebar</option>
		                        	<option value="2crs" <?php if($settings->category_post_columns=='2crs'): ?>selected <?php endif; ?>>2 Columns with Right Sidebar</option>
		                        	<option value="2cns" <?php if($settings->category_post_columns=='2cns'): ?>selected <?php endif; ?>>2 Columns No Sidebar</option>
		                        	
		                        	<option value="3cls" <?php if($settings->category_post_columns=='3cls'): ?>selected <?php endif; ?>>3 Columns with Left Sidebar</option>
		                        	<option value="3crs" <?php if($settings->category_post_columns=='3crs'): ?>selected <?php endif; ?>>3 Columns with Right Sidebar</option>
		                        	<option value="3cns" <?php if($settings->category_post_columns=='3cns'): ?>selected <?php endif; ?>>3 Columns No Sidebar</option>
		                        	
		                        	 <option value="4cns" <?php if($settings->category_post_columns=='4cns'): ?>selected <?php endif; ?>>4 Columns No Sidebar</option>
		                         
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tags Page Layout</label>
                    <div class="col-sm-4">
                        <select id="basic" name="tags_post_columns" class="selectpicker show-tick form-control"> 
                        	 		 
		                        	<option value="1cls" <?php if($settings->tags_post_columns=='1cls'): ?>selected <?php endif; ?>>1 Column with Left Sidebar</option>
		                        	<option value="1crs" <?php if($settings->tags_post_columns=='1crs'): ?>selected <?php endif; ?>>1 Column with Right Sidebar</option>
		                        	
		                        	<option value="2cls" <?php if($settings->tags_post_columns=='2cls'): ?>selected <?php endif; ?>>2 Columns with Left Sidebar</option>
		                        	<option value="2crs" <?php if($settings->tags_post_columns=='2crs'): ?>selected <?php endif; ?>>2 Columns with Right Sidebar</option>
		                        	<option value="2cns" <?php if($settings->tags_post_columns=='2cns'): ?>selected <?php endif; ?>>2 Columns No Sidebar</option>
		                        	
		                        	<option value="3cls" <?php if($settings->tags_post_columns=='3cls'): ?>selected <?php endif; ?>>3 Columns with Left Sidebar</option>
		                        	<option value="3crs" <?php if($settings->tags_post_columns=='3crs'): ?>selected <?php endif; ?>>3 Columns with Right Sidebar</option>
		                        	<option value="3cns" <?php if($settings->tags_post_columns=='3cns'): ?>selected <?php endif; ?>>3 Columns No Sidebar</option>
		                        	
		                        	 <option value="4cns" <?php if($settings->tags_post_columns=='4cns'): ?>selected <?php endif; ?>>4 Columns No Sidebar</option>
		                         
                        </select>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Search Page Layout</label>
                    <div class="col-sm-4">
                        <select id="basic" name="search_post_columns" class="selectpicker show-tick form-control"> 
                        	 		 
		                        	<option value="1cls" <?php if($settings->search_post_columns=='1cls'): ?>selected <?php endif; ?>>1 Column with Left Sidebar</option>
		                        	<option value="1crs" <?php if($settings->search_post_columns=='1crs'): ?>selected <?php endif; ?>>1 Column with Right Sidebar</option>
		                        	
		                        	<option value="2cls" <?php if($settings->search_post_columns=='2cls'): ?>selected <?php endif; ?>>2 Columns with Left Sidebar</option>
		                        	<option value="2crs" <?php if($settings->search_post_columns=='2crs'): ?>selected <?php endif; ?>>2 Columns with Right Sidebar</option>
		                        	<option value="2cns" <?php if($settings->search_post_columns=='2cns'): ?>selected <?php endif; ?>>2 Columns No Sidebar</option>
		                        	
		                        	<option value="3cls" <?php if($settings->search_post_columns=='3cls'): ?>selected <?php endif; ?>>3 Columns with Left Sidebar</option>
		                        	<option value="3crs" <?php if($settings->search_post_columns=='3crs'): ?>selected <?php endif; ?>>3 Columns with Right Sidebar</option>
		                        	<option value="3cns" <?php if($settings->search_post_columns=='3cns'): ?>selected <?php endif; ?>>3 Columns No Sidebar</option>
		                        	
		                        	 <option value="4cns" <?php if($settings->search_post_columns=='4cns'): ?>selected <?php endif; ?>>4 Columns No Sidebar</option>
		                         
                        </select>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Single Post Layout</label>
                    <div class="col-sm-4">
                        <select id="basic" name="single_post_column" class="selectpicker show-tick form-control"> 
                        	<option value="1cls" <?php if($settings->single_post_column=='1cls'): ?>selected <?php endif; ?>>Left Sidebar</option>
		                    <option value="1crs" <?php if($settings->single_post_column=='1crs'): ?>selected <?php endif; ?>>Right Sidebar</option>
		                        	
		                        	  
                        </select>
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
        <div role="tabpanel" class="tab-pane" id="share_comments">
            
            <?php echo Form::open(array('url' => 'admin/addthisdisqus','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">AddThis Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="addthis_share_code" class="form-control" rows="5"><?php echo e($settings->addthis_share_code); ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Disqus Comment Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="disqus_comment_code" class="form-control" rows="5"><?php echo e($settings->disqus_comment_code); ?></textarea>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook Comment Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="facebook_comment_code" class="form-control" rows="5"><?php echo e($settings->facebook_comment_code); ?></textarea>
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
        
        <div role="tabpanel" class="tab-pane" id="other_Settings">
            
            <?php echo Form::open(array('url' => 'admin/headfootupdate','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Header Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_header_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to header. "><?php echo e($settings->site_header_code); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Footer Code</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_footer_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to footer. "><?php echo e($settings->site_footer_code); ?></textarea>
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