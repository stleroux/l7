

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	Request a New Feature
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('features.index')); ?>">Feature Requests</a></li>
	<li class="breadcrumb-item">Request a New Feature</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('features.store')); ?>" method="POST" class="m-0 p-0">
		<?php echo csrf_field(); ?>

		<?php echo $__env->make('UI.features.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<div class="row">

			<div class="col">

				<div class="card card-trans-4">

					<div class="card-header section_header">
						<div class="card-title">Feature Information</div>
					</div>

					<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

					<div class="card-body">
						<div class="row">
							<div class="col">
								<?php echo $__env->make('UI.features.create.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="col-xl-2">
								<?php echo $__env->make('UI.features.create.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<?php echo $__env->make('UI.features.create.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->


	</form>
	
	<?php echo $__env->make('help.index', ['title'=>'Request a Feature', 'icon'=>'features', 'path'=>'UI.features.create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/features/create.blade.php ENDPATH**/ ?>