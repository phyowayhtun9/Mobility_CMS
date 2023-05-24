<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12 about-cor-a no-pad img-responsive" <?php if(getcong_service('section_about_image')): ?>style="background: url(<?php echo e(URL::asset('upload/'.getcong_service('section_about_image'))); ?>) no-repeat scroll center center / cover;"<?php endif; ?>> </div>
      <div class="col-md-6 col-sm-12 no-pad">
      <div class="section-title about-cor text-left">
        <h2><?php echo getcong_service('section_about_title'); ?></h2>
        <p class="dark"><?php echo getcong_service('section_about_desc'); ?></p>
           
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
</div>