<button type="button"
	class="unpublish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#unpublishModal"
	data-id="<?php echo e($post->id); ?>"
	data-url="<?php echo e(url('admin/posts/unpublish', $post)); ?>"
	title="Unpublish Post"
	>
	<i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
	
</button>

<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/grid/unpublish.blade.php ENDPATH**/ ?>