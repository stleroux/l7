

<?php $__env->startSection('stylesheet'); ?>
	
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
	<style>
/*		img {
	display: block;
	max-width: 100%;
	height: auto;
}*/
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.')); ?> mr-1"></i>
	Custom Order Wizard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('carvings.index')); ?>">Carvings</a></li>
	<li class="breadcrumb-item">Custom Order</li>
	<li class="breadcrumb-item"><a href="">Step 1</a></li>
	<li class="breadcrumb-item">Step 2</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
	// dd(session()->all());
?>



	<form action="<?php echo e(route('carvings.customOrder.sign.simple.material.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
	
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 3 :: Select the desired wood (Simple)
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">
						
						<?php if($errors->any()): ?>
							<div class="alert alert-danger" role="alert">
								<ul>
									<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($error); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						<?php endif; ?>

						
							<?php echo $__env->make('UI.carvings.customOrders.partials.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a href="<?php echo e(route('carvings.customOrder.sign.type.create')); ?>" class="btn btn-warning">
									<i class="fas fa-backward"></i>
									Back
								</a>
							</div>

							<div class="col text-right">
								<button type="submit" class="btn btn-primary">
									Next Step
									<i class="fas fa-forward"></i>
								</button>
							</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>

	</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		// set initial state
		var $checked = $('input[type="radio"]:checked');
		$checked.closest('.col-h').addClass('checked');

		// update on change
		$('input[type="radio"]').change(function() {
			$checked.prop('checked', false).closest('.col-h').removeClass('checked');
			$checked = $(this);
			$checked.closest('.col-h').addClass('checked');
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/signs/simple/material.blade.php ENDPATH**/ ?>