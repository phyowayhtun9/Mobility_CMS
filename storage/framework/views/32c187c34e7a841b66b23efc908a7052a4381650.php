<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		
		<h2>Review List</h2>
         
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>User Name</th>               
                <th>Email</th>
                <th class="text-center" style="width:220px">Rating</th>
                
                <th>Review</th>                           
                
            </tr>
            </thead>

            <tbody>
            <?php foreach($review_list as $i => $review): ?>
            <tr>
                <td><?php echo e(date('m-d-Y',$review->date)); ?></td>
                <td><?php echo e(\App\User::getUserFullname($review->user_id)); ?></td>                
                <td><?php echo e(\App\User::getUserInfo($review->user_id)->email); ?></td>                
                <td class="text-center"> 
                    <div class="h4">
                        <?php for($x = 0; $x < 5; $x++): ?>
                  
                          <?php if($x < \App\Review::getUserAvgReview($review->user_id)): ?>
                            <span class="fa fa-fw fa-star text-success"></span>
                          <?php else: ?>
                            <span class="fa fa-fw fa-star-o text-muted"></span>
                          <?php endif; ?>
                     
                       <?php endfor; ?>
                    </div>
                      
                </td>
                 
                <td><?php echo e($review->review_text); ?></td>
               
            </tr>
           <?php endforeach; ?>
             
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>