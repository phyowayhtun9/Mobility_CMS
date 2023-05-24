<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center white">
      <h2 class="white"><?php echo getcong_service('section_testimonials_title'); ?></h2>
      <hr class="black">
    </div>
    <div id="Testimonial" class="owl-carousel">
      
      <?php foreach($testimonials as $i => $testimonial): ?>
      <div class="item">
        <p><img src="<?php echo e(URL::asset('upload/testimonial/'.$testimonial->image.'-b.png')); ?>" alt=""></p>
        <p class="para-tex"><?php echo $testimonial->testimonial; ?></p>        
         
        <p class="clients-name"><strong><?php echo e($testimonial->name); ?></strong></p>
      </div>
      <?php endforeach; ?>
       
       
    </div>
  </div>
</div>