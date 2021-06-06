<?php if($carving->jobSheet): ?>
	<a href="<?php echo e('/_carvings/' . $carving->id .  '/' . $carving->jobSheet); ?>"
		class="btn btn-sm btn-light border"
		target="_blank"
		data-toggle="tooltip"
		title="Show Job Sheet">
		<i class="<?php echo e(config('icons.jobSheet')); ?> text-primary"></i>
	</a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/showJobSheet.blade.php ENDPATH**/ ?>