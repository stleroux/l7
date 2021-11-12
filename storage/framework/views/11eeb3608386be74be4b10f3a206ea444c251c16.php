

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
	<li class="breadcrumb-item"><a href="">Step 4</a></li>
	<li class="breadcrumb-item">Step 5</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('UI.carvings.customOrders.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="<?php echo e(route('carvings.customOrder.sign.house.number.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 7 :: Enter the desired number
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="row text-center">
							<div class="col-2">
								<input type="text" name="number" id="number" class="form-control" value="<?php echo e(Session::get('number') ?? old('number')); ?>" />								
							</div>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a type="button" href="<?php echo e(route('carvings.customOrder.sign.house.size.create')); ?>" class="btn btn-warning">
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

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/signs/houses/number.blade.php ENDPATH**/ ?>