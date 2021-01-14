<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-dashboard')); ?>"></i>
   Invoicer :: Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   
   <li class="breadcrumb-item">Invoicer</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">


	<div class="card-body">
		<div class="row">
			<div class="col-12">
				<?php echo $__env->make('admin.invoicer.dashboard.inc.totals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
		
		<div class="row mt-2">
			<div class="col-xs-12 col-sm-3">
				<?php echo $__env->make('admin.invoicer.dashboard.inc.invoices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="col-xs-12 col-sm-6">
				<?php echo $__env->make('admin.invoicer.dashboard.inc.owingClients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.invoicer.dashboard.inc.bestClients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="col-xs-12 col-sm-3">
				<?php echo $__env->make('admin.invoicer.dashboard.inc.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
	</div>

	<div class="card-footer p-2">
		<span class="float-right">
			<small>V <?php echo e(config('invoicer.version')); ?></small>
		</span>		
	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/dashboard/index.blade.php ENDPATH**/ ?>