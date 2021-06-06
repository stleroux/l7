<div class="card card-trans-0 card-outline card-primary mb-3">

	<div class="card-header bg-info text-light">
		
			<strong>
				<i class="<?php echo e(config('icons.comments')); ?>"></i>
				Comments
			</strong>
			<small>(<?php echo e($model->comments()->count()); ?> total)</small>
		
	</div>

	<div class="card-body card-trans-6 text-dark p-0">
		<?php if($model->comments->count()): ?>
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr class="d-flex">
						<th class="col-3">Name</th>
						<th class="col-7">Comment</th>
						<th class="col-2">Posted On</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $model->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="d-flex">
						<td class="col-3">
							
							<?php echo e($comment->user->username); ?>

						</td>
						<td class="col-7"><?php echo $comment->comment; ?></td>
						<td class="col-2">
							
							
							<?php echo e($comment->created_at->format(config('settings.dateFormat'))); ?>

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
<?php /**PATH C:\sites\l7\resources\views/UI/projects/show/comments.blade.php ENDPATH**/ ?>