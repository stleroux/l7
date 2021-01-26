<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	Edit Bug Report
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('bugs.index')); ?>">Bug Reports</a></li>
	<li class="breadcrumb-item">Edit Bug Report</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('bugs.store')); ?>" method="POST" id="reportBugForm" class="m-0 p-0">
		<?php echo csrf_field(); ?>

		<?php echo $__env->make('UI.bugs.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<div class="row">

			<div class="col">

				<div class="card card-primary">

					<div class="card-header">
						<div class="card-title">Bug Information</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<?php echo $__env->make('UI.bugs.create.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="col">
								<?php echo $__env->make('UI.bugs.create.page_url', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="col-xl-2">
								<?php echo $__env->make('UI.bugs.create.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<?php echo $__env->make('UI.bugs.create.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>

					</div> <!-- Card body -->
				</div><!-- Card -->
			</div><!-- Col -->

		</div><!-- Row -->

	<?php echo $__env->make('help.index', ['title'=>'Report a Bug', 'icon'=>'bugs', 'path'=>'UI.bugs.create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/bugs/create.blade.php ENDPATH**/ ?>