<!-- Footer ================================================== -->
<footer>
  <div class="container"> 
     
    <div class="row">
      <div class="col-md-12">
        <div id="social_footer">
          <ul>
            <li><a href="<?php echo e(getcong_widgets('social_facebook')); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_twitter')); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_google')); ?>" target="_blank"><i class="icon-google"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_instagram')); ?>" target="_blank"><i class="icon-instagram"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_pinterest')); ?>" target="_blank"><i class="icon-pinterest"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_vimeo')); ?>" target="_blank"><i class="icon-vimeo"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_youtube')); ?>" target="_blank"><i class="icon-youtube-play"></i></a></li>
          </ul>
          <p> 
          	<?php if(getcong('site_copyright')): ?>
						
				<?php echo e(getcong('site_copyright')); ?>

			
			<?php else: ?>
			
				Copyright © 2015 <?php echo e(getcong('site_name')); ?>. All rights reserved.
			<?php endif; ?>
		 </p>
        </div>
      </div>
    </div>
    <!-- End row --> 
  </div>
  <!-- End container --> 
</footer>
<!-- End Footer =============================================== -->