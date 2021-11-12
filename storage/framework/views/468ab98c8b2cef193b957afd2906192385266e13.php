

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
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

<?php
	// dd(session()->all());
?>

<div class="card card-trans-4">
	
	<div class="card-header card-trans-2 text-dark">
		<div class="card-title font-weight-bold">
			Selection Confirmation
		</div>
	</div> <!-- End card header -->

	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<table class="table table-hover table-striped table-sm">
					<tbody>
						<tr>
							<th>Item</th>
							<td><?php echo e(ucfirst(Session::get('item'))); ?></td>
						</tr>
						<tr>
							<th>Sign Type</th>
							<td><?php echo e(ucfirst(Session::get('signType'))); ?></td>
						</tr>
						<tr>
							<th>Material</th>
							<td>
								<?php
									if(preg_match('/[A-Z]/', Session::get('material'))) {
										$material = preg_split('/(?=[A-Z])/', Session::get('material'));
								?>
									<?php echo e(ucfirst($material[0])); ?> <?php echo e(ucfirst($material[1])); ?>

								<?php } else { ?>
									<?php echo e(ucfirst(Session::get('material'))); ?>	
								<?php } ?>
							</td>							
						</tr>
						<tr>
							<th>Pattern</th>
							<td><?php echo e(Session::get('pattern')); ?></td>
						</tr>
						<tr>
							<th>Style</th>
							<td><?php echo e(Session::get('style')); ?></td>
						</tr>
						<tr>
							<th>Size</th>
							<td><?php echo e(Session::get('height')); ?> <small>high</small> X <?php echo e(Session::get('width')); ?> <small>wide</small></td>
						</tr>
						<tr>
							<th>Number</th>
							<td><?php echo e(Session::get('number')); ?></td>
						</tr>
						<tr>
							<th>Font</th>
							<td><?php echo e(Session::get('font')); ?></td>
						</tr>
						<tr>
							<th>Color</th>
							<td><?php echo e(Session::get('color')); ?></td>
						</tr>
						<tr>
							<th>Finish</th>
							<td><?php echo e(Session::get('finish')); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<div class="card-footer">
		<a href="<?php echo e(route('carvings.customOrder.sign.house.finish.create')); ?>" class="btn btn-warning">Back</a>
		<a href="<?php echo e(route('carvings.customOrder.reset')); ?>" class="btn btn-primary">Restart</a>
		<a href="#" class="btn btn-success">Confirm</a>
	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/confirmation.blade.php ENDPATH**/ ?>