<?php if($carving->jobSheet): ?>
	<a
		href="<?php echo e(route('admin.carvings.deleteJobSheet', $carving->id)); ?>"
		class="btn btn-block btn-outline-pink"
		onclick="return confirm('Delete the job sheet?')"
	>
		Delete Job Sheet
	</a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/deleteJobSheet.blade.php ENDPATH**/ ?>