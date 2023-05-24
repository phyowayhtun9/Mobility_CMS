<div id="services-icon" class="service-item">
  <div class="container">
    <div class="section-title center text-center">
      <h2><?php echo getcong_service('section_service_title'); ?></h2>
      <hr>
      <p class="para"><?php echo getcong_service('section_service_desc'); ?></p>
    </div>
    <div class="row">
      <?php foreach($services as $service): ?>
      <div class="col-sm-6 col-md-4">
        <div class="media services-icon-wrap">
          <div class="pull-left"><img class="img-responsive" src="<?php echo e(URL::asset('upload/service/'.$service->service_icon.'-b.jpg')); ?>" alt=""> </div>
          <div class="media-body">
            <h3 class="media-heading"><?php echo e($service->service_title); ?></h3>
            <p><?php echo $service->service_text; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
       
       
    </div>
  </div>
</div>