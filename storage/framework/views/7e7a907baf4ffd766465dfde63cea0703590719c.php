<?php $__env->startSection('head_title', 'Login' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
  <div class="white_for_login">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div id="order_process" class="box_style_2">
            <h2 class="inner">Login</h2>
             
              <?php echo Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')); ?> 
              <div class="message">
                         
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

          <div class="alert alert-success fade in">
              
             <?php echo e(Session::get('flash_message')); ?>

           </div>

             
        <?php endif; ?>              
              <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Your email" class="form-control" value="" name="email" id="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" class="form-control" value="" name="password" id="password">
              </div>
              <button class="btn btn-submit" type="submit">Login</button>
            <?php echo Form::close(); ?> 
          </div>
        </div>
        <div class="col-md-3"> </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>