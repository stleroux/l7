<button type="button"
	class="publish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#publishModal"
	data-id="<?php echo e($post->id); ?>"
	data-url="<?php echo e(url('admin/posts/publish', $post)); ?>"
	title="Publish Post"
	>
	<i class="<?php echo e(config('icons.publish')); ?>"></i>
	
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/grid/publish.blade.php ENDPATH**/ ?>