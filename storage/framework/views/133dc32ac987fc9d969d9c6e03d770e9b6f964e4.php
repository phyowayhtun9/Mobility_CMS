<?php $__env->startSection('head_title', 'Login' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("_particles.sub_header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

 <div class="container margin_60">



  <div class="row">
    <div class="col-md-3">

    </div>  
    <div class="col-md-6">
        <div class="box_style_2" id="order_process">
          <h2 class="inner">Login</h2>
          <?php echo Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')); ?> 

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
            <label>Email</label>
            <input type="email" id="email" name="email" value="" class="form-control" placeholder="Your email">
          </div>  
           <div class="form-group">
            <label>Password</label>
          <input type="password" id="password" name="password" value="" class="form-control" placeholder="Password">   
          </div>       
 
          <hr>
           
            <button type="submit" class="btn btn-submit">Login</button>
      <?php echo Form::close(); ?> 
        </div>
        <!-- End box_style_1 --> 
      </div>
      <!-- End col-md-6 -->


     
        
  </div>
  <!-- End row -->   


   
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>