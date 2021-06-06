<div class="card card-trans-4 mb-3">

	<div class="card-header text-light font-weight-bold" style="">
		
			<i class="<?php echo e(config('icons.comments')); ?>"></i>
			Comments <small>(<?php echo e($post->comments()->count()); ?> total)</small>
		
	</div>

	<div class="card-body card-trans-2 text-dark p-2">
		<?php if($post->comments->count()): ?>
			<table class="table table-sm table-hover">
				<thead>
					<tr class="row">
						<th class="col-xl-3">Name</th>
						<th class="col-xl-7">Comment</th>
						<th class="col-xl-2">Posted On</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="row">
						<td class="col-xl-3">
							
							<?php echo e($comment->user->username); ?>

						</td>
						<td class="col-xl-7"><?php echo $comment->comment; ?></td>
						<td class="col-xl-2">
							
							<?php echo e(($comment->created_at) ? date(Config::get('settings.dateFormat'), strtotime($comment->created_at)) : 'N/A'); ?>

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
<?php /**PATH C:\sites\l7\resources\views/UI/blog/show/comments.blade.php ENDPATH**/ ?>