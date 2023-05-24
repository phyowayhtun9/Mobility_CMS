<div class="col-md-3">
       
      <div id="filters_col"> <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
        <div class="collapse" id="collapseFilters">
          <div class="filter_type">
             
            <h6>Type</h6>
            <ul>
             <li>
                <label><a href="<?php echo e(URL::to('restaurants/')); ?>">All</a></label>
              </li>
              <?php foreach(\App\Types::orderBy('type')->get() as $type): ?>
              <li>
                <label><a href="<?php echo e(URL::to('restaurants/type/'.$type->id)); ?>"><?php echo e($type->type); ?></a></label>
              </li>
              <?php endforeach; ?>
              
            </ul>
          </div>
          <div class="filter_type">
            <h6>Rating</h6>
            <ul>
              <li>
                <a href="<?php echo e(URL::to('restaurants/rating/5')); ?>">              
                  <span class="rating"> <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> </span></a>
              </li>
              <li>
                <a href="<?php echo e(URL::to('restaurants/rating/4')); ?>">                   
                  <span class="rating"> <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> </span></a>
              </li>
              <li>
                <a href="<?php echo e(URL::to('restaurants/rating/3')); ?>">
                   
                  <span class="rating"> <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> </span></a>
              </li>
              <li>
                <a href="<?php echo e(URL::to('restaurants/rating/2')); ?>">                   
                  <span class="rating"> <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> </span></a>
              </li>
              <li>
                <a href="<?php echo e(URL::to('restaurants/rating/1')); ?>">                   
                  <span class="rating"> <i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> </span></a>
              </li>
            </ul>
          </div>
           
        </div>
        <!--End collapse --> 
      </div>
      <!--End filters col--> 
    </div>
    <!--End col-md -->