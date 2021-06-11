<?php if($post->image): ?>
	<a
		href="<?php echo e(route('admin.posts.deleteImage', $post->id)); ?>"
		class="btn btn-block btn-outline-pink"
		onclick="return confirm('Delete the image?')"
	>
		Delete Image
	</a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/deleteImage.blade.php ENDPATH**/ ?>