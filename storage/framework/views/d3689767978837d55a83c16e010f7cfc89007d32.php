<?php if(Auth::user()->can('feature-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-12">
		<h3 class="text-dark"><?php echo e($carvingsByCategoryChart->options['chart_title']); ?></h3>
		<?php echo $carvingsByCategoryChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/carvingsByCategory.blade.php ENDPATH**/ ?>