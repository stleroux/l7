

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"/>
	<style>
		
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.')); ?> mr-1"></i>
	Custom Order Wizard :: Trays :: Step 2
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

	<h1>Step Two</h1>
	<h2><?php echo e(Session::get('item')); ?></h2>

	<form action="" method="POST">
		<?php echo csrf_field(); ?>
		<a href="<?php echo e(route('carvings.customOrder.create')); ?>" class="btn btn-warning">Back to Step 1</a>
		<button type="submit" class="btn btn-primary">Next</button>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/trays/step-two.blade.php ENDPATH**/ ?>