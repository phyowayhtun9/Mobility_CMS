<div id="team" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo getcong_service('section_team_title'); ?></h2>
      <hr>
      <p class="para"><?php echo getcong_service('section_team_desc'); ?></p>
    </div>
    <div id="our-teams" class="owl-carousel">
       
      <?php foreach($team as $k=>$team_member): ?>
      <?php if($k==1): ?><div class="item text-center"> <?php else: ?> <div class="item"> <?php endif; ?>

        <img class="img-thumbnail" src="<?php echo e(URL::asset('upload/team/'.$team_member->image.'-b.jpg')); ?>" alt="">

        <div class="caption">
          <h3><?php echo e($team_member->name); ?></h3>
          <h5><?php echo e($team_member->designation); ?></h5>          
          <div class="text-center fnav">
            <ul class="footer-social">
              <?php if($team_member->facebook_url): ?><li><a href="<?php echo e($team_member->facebook_url); ?>"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
              <?php if($team_member->twitter_url): ?><li><a href="<?php echo e($team_member->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
              <?php if($team_member->linkedin_url): ?><li><a href="<?php echo e($team_member->linkedin_url); ?>"><i class="fa fa-dribbble"></i></a></li><?php endif; ?>
              <?php if($team_member->gplus_url): ?><li><a href="<?php echo e($team_member->gplus_url); ?>"><i class="fa fa-linkedin"></i></a></li><?php endif; ?>
            </ul>
          </div>
          <hr>
        </div>
      </div>
       
      <?php endforeach; ?>
       
    </div>
  </div>
</div>