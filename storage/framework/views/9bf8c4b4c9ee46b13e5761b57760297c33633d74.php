

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.bugs')); ?>"></i>
	Report a Bug
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('bugs.index')); ?>">Bug Reports</a></li>
	<li class="breadcrumb-item">Report a Bug</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('bugs.store')); ?>" method="POST" id="reportBugForm">
		<?php echo csrf_field(); ?>

		<?php echo $__env->make('UI.bugs.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('UI.bugs.forms.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</form>

	<?php echo $__env->make('help.index', ['title'=>'Report a Bug', 'icon'=>'bugs', 'path'=>'UI.bugs.create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/bugs/create.blade.php ENDPATH**/ ?>