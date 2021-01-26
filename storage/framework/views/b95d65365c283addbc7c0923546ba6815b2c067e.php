<div class="card card-secondary mb-3">

	<div class="card-header font-weight-bold p-1">
		
			<i class="<?php echo e(config('icons.comments')); ?>"></i>
			Comments <small>(<?php echo e($recipe->comments()->count()); ?> total)</small>
		
	</div>

	<div class="card-body text-dark p-1">
		<?php if($recipe->comments->count()): ?>
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Comment</th>
						<th scope="col">Posted On</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $recipe->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr scope="row">
						<td>
							<?php echo $__env->make('common.authorFormat', ['model'=>$comment, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							
						</td>
						<td><?php echo $comment->comment; ?></td>
						<td>
							<?php echo $__env->make('common.dateFormat', ['model'=>$comment, 'field'=>'created_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</td>
						
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="text p-1">No comments found</div>
		<?php endif; ?>
	</div>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/comments.blade.php ENDPATH**/ ?>