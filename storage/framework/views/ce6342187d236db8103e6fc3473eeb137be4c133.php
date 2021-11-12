

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
	<li class="breadcrumb-item"><a href="">Step 2</a></li>
	<li class="breadcrumb-item"><a href="">Step 3</a></li>
	<li class="breadcrumb-item">Step 4</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('UI.carvings.customOrders.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="<?php echo e(route('carvings.customOrder.sign.house.color.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>

		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 9 :: Select the desired color
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">
						
						<div class="row text-center">
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Color 1</div>
								<div><img src="<?php echo e(asset('customOrders/signs/patterns/pattern_1.png')); ?>" class="img-fluid" /></div>
								<div><input type="radio" name="color" id="1" value="1" <?php echo e(Session::get('color') == "1" ? 'checked' : ''); ?> /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Color 2</div>
								<div><img src="<?php echo e(asset('customOrders/signs/patterns/pattern_2.png')); ?>" class="img-fluid" /></div>
								<div><input type="radio" name="color" id="2" value="2" <?php echo e(Session::get('color') == "2" ? 'checked' : ''); ?> /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Color 3</div>
								<div><img src="<?php echo e(asset('customOrders/signs/patterns/pattern_3.png')); ?>" class="img-fluid" /></div>
								<div><input type="radio" name="color" id="3" value="3" <?php echo e(Session::get('color') == "3" ? 'checked' : ''); ?> /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Color 4</div>
								<div><img src="<?php echo e(asset('customOrders/signs/patterns/pattern_4.png')); ?>" class="img-fluid" /></div>
								<div><input type="radio" name="color" id="4" value="4" <?php echo e(Session::get('color') == "4" ? 'checked' : ''); ?> /></div>
							</label>
						</div>

					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a type="button" href="<?php echo e(route('carvings.customOrder.sign.house.font.create')); ?>" class="btn btn-warning">
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

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/signs/houses/color.blade.php ENDPATH**/ ?>