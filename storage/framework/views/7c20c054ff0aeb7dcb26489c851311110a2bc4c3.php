
<?php if(auth()->guard()->check()): ?>
	<div class="card mb-3 card-trans-4">
		<div class="card-header block_header p-2">
			<i class="fa fa-comment"></i>
			Leave A Comment
		</div>
		<div class="card-body pt-1 pb-2">
			
			<form action="<?php echo e(route('blog.storeComment', $post->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<div class="row">
					<div class="col py-0 px-0">
						<div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
							
							
							
							<textarea name="comment" rows="5" class="form-control form-control-sm plain"></textarea>
							<span class="text-danger"><?php echo e($errors->first('comment')); ?></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col py-0 px-0">
						
						
						<button type="submit" name="add" class="btn btn-sm btn-success btn-block">
							<i class="<?php echo e(Config::get('icons.create')); ?>"></i>

							Add Comment
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer py-1 px-1">
			Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.
		</div>
	</div>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blog/blocks/leaveComment.blade.php ENDPATH**/ ?>