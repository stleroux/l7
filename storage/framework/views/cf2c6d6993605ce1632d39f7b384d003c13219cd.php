<div class="row float-right">

	<?php if($bug->status != "Resolved" && $bug->status != "Non Issue" && $bug->status != "Not Reproducible"): ?>

		<?php if($bug->user_id != Auth::id()): ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $bug)): ?>
				<form class="pr-1" action="<?php echo e(route('like')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="likeable_type" value="<?php echo e(get_class($bug)); ?>"/>
					<input type="hidden" name="id" value="<?php echo e($bug->id); ?>"/>
					<button class="btn btn-block btn-sm btn-success text-dark font-weight-bold"><?php echo app('translator')->get('Like'); ?></button>
				</form>
			<?php else: ?>
				<form class="pr-1" action="<?php echo e(route('unlike')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<input type="hidden" name="likeable_type" value="<?php echo e(get_class($bug)); ?>"/>
					<input type="hidden" name="id" value="<?php echo e($bug->id); ?>"/>
					<button class="btn btn-block btn-sm btn-danger text-dark"><strong><?php echo app('translator')->get('Unlike'); ?></strong></button>
				</form>
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>

	<?php if($bug->status == 'New' || $bug->status == 'Pending'): ?>
		<?php if($bug->user_id == Auth::id()): ?>
			<a href="#"
				class="destroy-model btn btn-sm btn-default mr-1"
				data-toggle="modal"
				data-target="#destroyModal"
				data-id="<?php echo e($bug->id); ?>"
				data-url="<?php echo e(url('bugs', $bug->id)); ?>">
				<i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
				Trash
			</a>

			<a href="<?php echo e(route('bugs.edit', $bug)); ?>" class="btn btn-sm btn-default mr-1">
				<i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
				Edit
			</a>
		<?php endif; ?>
	<?php endif; ?>

	<a href="<?php echo e(route('bugs.show', $bug)); ?>" class="btn btn-sm btn-default mr-1">
		<i class="<?php echo e(config('icons.view')); ?> text-primary"></i>
		View
	</a>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/bugs/index/actions.blade.php ENDPATH**/ ?>