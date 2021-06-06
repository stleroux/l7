

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	Edit Link
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('mylinks.index')); ?>">My Links</a></li>
	<li class="breadcrumb-item">Edit Link</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('mylinks.store')); ?>" method="POST" id="" class="m-0 p-0">
		<?php echo csrf_field(); ?>

		<?php echo $__env->make('UI.mylinks.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<div class="row">

			<div class="col">

				<div class="card card-trans-4">

					<div class="card-header section_header">
						<div class="card-title">Link Information</div>
					</div>

					<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

					<div class="card-body">
						<div class="row">
							<div class="col">
								<?php echo $__env->make('UI.mylinks.create.name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="col">
								<?php echo $__env->make('UI.mylinks.create.page_url', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->

	<?php echo $__env->make('help.index', ['title'=>'My Links', 'icon'=>'', 'path'=>'UI.mylinks.create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/mylinks/create.blade.php ENDPATH**/ ?>