<div id="why-choose" class="white-bg">
  <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="accordion">         
          <div class="panel-group skill" id="accordion1">
          <div class="section-title center">
            <h2><?php echo getcong_service('section_whychoose_title'); ?></h2>
            <hr>
          </div>
            <?php foreach($whychoose as $i => $whychoose_item): ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne<?php echo e($i); ?>"><?php echo $whychoose_item->title; ?> <i class="fa fa-angle-right pull-right"></i> </a> </div>
              </div>
              <div id="collapseOne<?php echo e($i); ?>" class="panel-collapse collapse <?php if($i==0): ?> in <?php endif; ?>">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="media-body">
                      <p><?php echo $whychoose_item->description; ?></p>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            
             
          </div>
        </div>
      </div>            
    </div>
  </div>
</div>