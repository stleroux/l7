<?php if($carving->jobSheet): ?>
	<a href="<?php echo e('/_carvings/' . $carving->id .  '/' . $carving->jobSheet); ?>" class="btn btn-block btn-default" target="_blank">
		<i class="<?php echo e(config('icons.jobSheet')); ?>"></i>
		Show Job Sheet
	</a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/showJobSheet.blade.php ENDPATH**/ ?>