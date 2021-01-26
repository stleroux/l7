<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.tree')); ?> col-2 col-sm-1 text-steel pr-2"></i>
   <div class="col-8 col-sm-7">
      Welcome to TheWoodBarn.ca
   </div>
   <i class="<?php echo e(config('icons.tree')); ?> col-2 col-sm-1 text-steel pl-2"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.blocks.popularItems', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="container">

		<div class="card bg-danger text-center">

			<div class="card-header">
				<div class="card-title">Unauthorized access.</div>
			</div>

			<div class="card-body">
				<div class="row">
					<div class="col">
						<img src="<?php echo e(asset('images\dog.jpg')); ?>">
					</div>
				</div>
				<div class="row pt-3">
					<div class="col">
						<p class="bg-warning">
							It seems like you do not have sufficient permissions to view this page, perform this action or your session has timed out due to inactiviy.
						</p>
						<p>
							If you think this is an error, please contact the system administrator by using the <a href="/contact">Contact Us</a> page
						</p>
					</div>
				</div>
			</div>

			<div class="card-footer p-2 mb-0">
				<p class="pb-0 mb-0">
					<a href="<?php echo e(URL::previous()); ?>" class="btn btn-default btn-xs">Back To Previous Page</a>
				</p>					
			</div>

		</div>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-fw', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/errors/403.blade.php ENDPATH**/ ?>