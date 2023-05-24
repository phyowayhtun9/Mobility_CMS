<div id="client" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo getcong_service('section_our_client_title'); ?></h2>
      <hr>
    </div>
    <div id="clients" class="owl-carousel">
      <?php foreach($clients as $i => $client): ?>
      
      <div class="item">
        <?php if($client->url!=""): ?>
        <a href="<?php echo e($client->url); ?>" target="_blank">
          <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="<?php echo e($client->name); ?>">
        </a> 
        <?php else: ?>
         <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="<?php echo e($client->name); ?>">
        <?php endif; ?>
      </div>

      <?php endforeach; ?>
 
         
    </div>
  </div>
</div>