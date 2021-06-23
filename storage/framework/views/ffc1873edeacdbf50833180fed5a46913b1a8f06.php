<?php if(Auth::user()->can('recipe-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-12">
		<h3 class="text-dark"><?php echo e($recipesByCategoryChart->options['chart_title']); ?></h3>
		<?php echo $recipesByCategoryChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/recipesByCategory.blade.php ENDPATH**/ ?>