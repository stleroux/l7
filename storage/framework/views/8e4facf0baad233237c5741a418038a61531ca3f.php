<div class="card card-trans-0 mb-3">

	<div class="card-header p-2 text-light font-weight-bold bg-primary">
		
			<i class="<?php echo e(config('icons.comments')); ?>"></i>
			Comments <small>(<?php echo e($post->comments()->count()); ?> total)</small>
		
	</div>

	<div class="card-body card-trans-6 text-dark p-0">
		<?php if($post->comments->count()): ?>
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Comment</th>
						<th scope="col">Posted On</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr scope="row">
						<td>
							<?php echo $__env->make('common.authorFormat', ['model'=>$comment, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							
						</td>
						<td><?php echo $comment->comment; ?></td>
						<td>
							
							<?php echo e($comment->created_at->format(config('settings.dateFormat'))); ?> 123
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="text p-1">No comments found</div>
		<?php endif; ?>
	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/posts/comments.blade.php ENDPATH**/ ?>