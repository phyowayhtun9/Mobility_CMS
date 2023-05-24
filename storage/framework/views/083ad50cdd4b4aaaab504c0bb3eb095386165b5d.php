<?php $__env->startSection('head_title', 'Page not found! | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

<!-- PAGE CONTENTS STARTS
				========================================================================= -->
			<section class="page-contents">
				<div class="row">
					<!-- LEFT COLUMN STARTS
						========================================================================= -->
					<div class="col-lg-8">
						<!-- FASHION STARTS
							========================================================================= --> 
							 <section class="error-page">
							<div class="row">
								<div class="col-lg-12">
									<h2 class="big">404</h2>
									<div class="small">THAT PAGE DOESN’T EXIST!</div>
									 
								</div>
							</div>
						</section>
						 
						<!-- /. FASHION ENDS
							========================================================================= -->
					</div>
					<!-- /. LEFT COLUMN ENDS
						========================================================================= --> 
					<?php echo $__env->make("_particles.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				 
			</section>
			<!-- /. PAGE CONTENTS ENDS
				========================================================================= -->
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>