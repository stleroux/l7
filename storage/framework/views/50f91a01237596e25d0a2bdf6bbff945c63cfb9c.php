

<?php $__env->startSection('stylesheet'); ?>
	
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
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

	<?php echo $__env->make('UI.carvings.customOrders.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<form action="<?php echo e(route('carvings.customOrder.sign.type.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
	
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							Signs :: Step 2 :: Select the type of sign
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="row text-center">
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">House Number</div>
								<div><i class="fas fa-home fa-5x"></i></div>
								<div><input type="radio" name="signType" id="house" value="house" <?php echo e(Session::get('signType') == "house" ? 'checked' : ''); ?> /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Simple Saying</div>
								<div><i class="far fa-comment-dots fa-5x"></i></div>
								<div><input disabled type="radio" name="signType" id="simple" value="simple"<?php echo e(Session::get('signType') == "simple" ? 'checked' : ''); ?> /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Saying with Graphic</div>
								<div><i class="far fa-address-card fa-5x"></i></div>
								<div><input disabled type="radio" name="signType" id="graphic" value="graphic" <?php echo e(Session::get('signType') == "graphic" ? 'checked' : ''); ?> /></div>
							</label>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a href="<?php echo e(route('carvings.customOrder.create')); ?>" class="btn btn-warning">
									<i class="fas fa-backward"></i>
									Back
								</a>
								<a href="<?php echo e(route('carvings.customOrder.reset')); ?>" class="btn btn-info">Restart</a>
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

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/signs/create.blade.php ENDPATH**/ ?>