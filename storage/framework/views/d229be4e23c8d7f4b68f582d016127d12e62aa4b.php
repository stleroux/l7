

<?php $__env->startSection('content'); ?>
	

	<?php
		include html_entity_decode(public_path() . '/_carvings/'.$carving->id.'/'.$carving->jobSheet);
	?>
	<?php echo $__env->make('common.audits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.none', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/carvings/showJobSheet.blade.php ENDPATH**/ ?>