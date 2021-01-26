<div class="modal fade" id="imageModal_XL" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="imageModalLabel">
					<?php echo e($post->title); ?>

				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					
					<img src="/_posts/<?php echo e($post->image); ?>" alt="" height="100%" width="100%">
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blog/show/imageModal_XL.blade.php ENDPATH**/ ?>