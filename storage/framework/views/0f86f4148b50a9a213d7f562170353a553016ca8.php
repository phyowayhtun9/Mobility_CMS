<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('admin/users/adduser')); ?>" class="btn btn-primary">Add User <i class="fa fa-plus"></i></a>
		</div>
		<h2>Users</h2>
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
	                <th>First Name</th>
	                <th>Last Name</th>
	                <th>Email</th>
	                <th>Telephone/mobile</th> 
	                <th class="text-center width-100">Action</th>
	            </tr>
            </thead>

            <tbody>
            <?php foreach($allusers as $i => $users): ?>
         	   <tr>
            	 
                <td><?php echo e($users->first_name); ?></td>
                <td><?php echo e($users->last_name); ?></td>
                <td><?php echo e($users->email); ?></td>
                <td><?php echo e($users->mobile); ?></td>
                
                <td class="text-center">
                <div class="btn-group">
								<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									Actions <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu"> 
									<li><a href="<?php echo e(url('admin/users/adduser/'.$users->id)); ?>"><i class="md md-edit"></i> Edit Editor</a></li>
									<li><a href="<?php echo e(url('admin/users/delete/'.$users->id)); ?>"><i class="md md-delete"></i> Delete</a></li>
								</ul>
							</div> 
                
            </td>
                
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