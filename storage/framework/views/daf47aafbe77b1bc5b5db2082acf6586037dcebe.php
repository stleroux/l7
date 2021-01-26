<div class="row">

	<div class="col-xl-2 mb-2">		
		<a href="<?php echo e(route('admin.movies.index')); ?>" class="btn btn-sm btn-primary">All Movies</a>
	</div>

	<div class="col-xl-8 mb-2 text-center">
		<?php echo $__env->make('admin.movies.buttons.previous', ['size'=>'sm', 'btn_label'=>'Previous', $previous], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.movies.buttons.next', ['size'=>'sm', 'btn_label'=>'Next', $next], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

	<div class="col-xl-2 mb-2 text-right">
		<a href="javascript:history.back()" class="btn btn-sm btn-primary">Previous Page</a>
	</div>

</div>

		
		
		<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/movies/show/topbar.blade.php ENDPATH**/ ?>