<?php if(Route::currentRouteName() == 'admin.permissions.index'): ?>
	<button type="reset" class="btn btn-sm btn-info border">
	   <i class="<?php echo e(config('icons.reset')); ?>"></i>
	   Reset
	</button>
<?php else: ?>
	<button type="reset" class="btn btn-block btn-default">
	   <i class="<?php echo e(config('icons.reset')); ?>"></i>
	   Reset
	</button>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/permissions/actions/common/reset.blade.php ENDPATH**/ ?>