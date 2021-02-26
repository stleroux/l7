<form action="<?php echo e(route('admin.notifications.destroy', $notification)); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('DELETE'); ?>
	<input type="hidden" value="<?php echo e($notification->id); ?>">
		<?php if($notification->read_at): ?>
			<?php echo $__env->make('admin.notifications.actions.markAsUnread', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>				
		<?php else: ?>
			<?php echo $__env->make('admin.notifications.actions.markAsRead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?>
		<input type="submit" class="btn btn-xs btn-danger" value="Delete">
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/notifications/actions/grid.blade.php ENDPATH**/ ?>