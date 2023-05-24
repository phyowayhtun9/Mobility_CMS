<?php $__env->startSection('head_title', 'Edit Profile' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("_particles.sub_header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Content ================================================== --> 
 <div class="container margin_60">
   
  <div class="row">
    <div class="col-md-3">

    </div>  
    <div class="col-md-6">
        <div class="box_style_2" id="order_process">
          <h2 class="inner">Edit Profile</h2>
          <?php echo Form::open(array('url' => 'profile','class'=>'','id'=>'myProfile','role'=>'form')); ?> 

            <div class="message">
                        <!--<?php echo Html::ul($errors->all(), array('class'=>'alert alert-danger errors')); ?>-->
                                    <?php if(count($errors) > 0): ?>
                          <div class="alert alert-danger">
                          
                              <ul>
                                  <?php foreach($errors->all() as $error): ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      <?php endif; ?>
                                    
        </div>
        <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">             
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>

          <div class="form-group">
            <label>First name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e($user->first_name); ?>" placeholder="First name">
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="text" class="form-control" id="last_name" value="<?php echo e($user->last_name); ?>" name="last_name" placeholder="Last name">
          </div>
          <div class="form-group">
            <label>Telephone/mobile</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo e($user->mobile); ?>" class="form-control" placeholder="Telephone/mobile">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="Your email">
          </div>           
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" id="city" name="city" value="<?php echo e($user->city); ?>" class="form-control" placeholder="Your city">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Postal code</label>
                <input type="text" id="postal_code" name="postal_code" value="<?php echo e($user->postal_code); ?>" class="form-control" placeholder=" Your postal code">
              </div>
            </div>
          </div>
           
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label>Your full address</label>
              <textarea class="form-control" style="height:150px" placeholder="Address" name="address" id="address"><?php echo e($user->address); ?></textarea>
            </div>
          </div>
            <button type="submit" class="btn btn-submit">Update Profile</button>
      <?php echo Form::close(); ?> 
        </div>
        <!-- End box_style_1 --> 
      </div>
      <!-- End col-md-6 -->


     
        
  </div>
  <!-- End row -->   
</div>
<!-- End white_bg -->

 

 
<!-- End section --> 
<!-- End Content =============================================== --> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>