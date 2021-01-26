

	<?php if(Auth::check()): ?>
		
		<?php echo e(($model->$field) ? date(config('settings.dateFormat'), strtotime($model->$field)) : 'N/A'); ?>

	<?php else: ?>
		
		<?php echo e(($model->$field) ? date('M j, Y', strtotime($model->$field)) : 'N/A'); ?>

	<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/common/dateFormat.blade.php ENDPATH**/ ?>