

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	
	<i class="fas fa-hat-wizard mr-1"></i>
	Custom Order Wizard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('carvings.index')); ?>">Carvings</a></li>
	<li class="breadcrumb-item">Wizard Step 1</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="alert alert-warning mb-2">This is a work in progress.</div>

	<?php echo $__env->make('UI.carvings.customOrders.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="<?php echo e(route('carvings.customOrder.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>

		<div class="card card-trans-4">
			
			<div class="card-header card-trans-2 text-dark">
				<div class="card-title font-weight-bold">
					Step 1 :: Select the desired item
				</div>
			</div> <!-- End card header -->

			<div class="card-body">

				<div class="row text-center">

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Accessories</div>
						<div><i class="fas fa-box fa-5x"></i></div>
						<div><input disabled type="radio" name="item" id="accessory" value="accessory" <?php echo e(Session::get('item') == "accessory" ? 'checked' : ''); ?> /></div>
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Catch All Trays</div>
						<div><i class="fab fa-trello fa-5x"></i></div>
						<input disabled type="radio" name="item" id="tray" value="tray" <?php echo e(Session::get('item') == "tray" ? 'checked' : ''); ?> />
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Others</div>
						<div><i class="fas fa-question fa-5x"></i></div>
						<input disabled type="radio" name="item" id="other" value="other" <?php echo e(Session::get('item') == "other" ? 'checked' : ''); ?> />
					</label>
					
					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Plaques</div>
						<div><i class="fas fa-shield-alt fa-5x"></i></div>
						<input disabled type="radio" name="item" id="plaque" value="plaque" <?php echo e(Session::get('item') == "plaque" ? 'checked' : ''); ?> />
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Signs</div>
						<div><i class="fas fa-sign fa-5x"></i></div>
						<input type="radio" name="item" id="sign" value="sign" <?php echo e(Session::get('item') == "sign" ? 'checked' : ''); ?> />
					</label>

				</div>

			</div> <!-- End card body -->
			
			<div class="card-footer">
				<a href="<?php echo e(route('carvings.customOrder.reset')); ?>" class="btn btn-info">Reset</a>
				<div class="float-right">
					<button type="submit" class="btn btn-primary">
						Next Step
						<i class="fas fa-forward"></i>
					</button>
				</div>
			</div> <!-- End card footer -->

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

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/create.blade.php ENDPATH**/ ?>