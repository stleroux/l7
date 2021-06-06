

<?php if(Auth::check()): ?>

   <?php if(Config::get('settings.authorFormat') == "username"): ?>

		<?php if($field == 'user'): ?>
			
			<a href="" data-toggle="modal" data-target="#view<?php echo e($field); ?>Modal<?php echo e($model->id); ?>" class="btn btn-xs border text-light">
				<i class="<?php echo e(Config::get('icons.link')); ?>  <?php echo e(((\Request::is('admin/*')) ? 'text-dark' : 'text-light')); ?>"></i>
			</a>
			<?php echo e($model->user->username); ?>


		<?php elseif($field == 'modifiedBy'): ?>
			
			<?php if($model->modified_by_id): ?>
				<i class="fas fa-sm fa-link"></i>
				<a href="" data-toggle="modal" data-target="#view<?php echo e($field); ?>Modal<?php echo e($model->id); ?>">
					<?php echo e($model->modifiedBy->username); ?>

				</a>
			<?php else: ?>
				N/A
			<?php endif; ?>

		<?php elseif($field == 'lastViewedBy'): ?>

			<?php if($model->last_viewed_by_id): ?>
				<i class="fas fa-sm fa-link"></i>
				<a href="" data-toggle="modal" data-target="#view<?php echo e($field); ?>Modal<?php echo e($model->id); ?>">
					<?php echo e($model->lastViewedBy->username); ?>

				</a>
			<?php else: ?>
				N/A
			<?php endif; ?>

		<?php endif; ?>

   <?php endif; ?>

	





<?php else: ?>
	<!-- Username -->
	<?php if($field == 'user'): ?>
		<?php echo e($model->user->username); ?>

	<?php elseif($field == 'modifiedBy'): ?>
		<?php echo e($model->modifiedBy->username); ?>

	<?php elseif($field == 'lastViewedBy'): ?>
		<?php echo e($model->lastViewedBy->username); ?>

	<?php endif; ?>
	
<?php endif; ?>

<?php echo $__env->make('modals.author', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\sites\l7\resources\views/common/authorFormat.blade.php ENDPATH**/ ?>