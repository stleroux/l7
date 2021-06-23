<?php if(Auth::user()->can('project-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-6">
		<h3 class="text-dark"><?php echo e($projectsByCategoryChart->options['chart_title']); ?></h3>
		<?php echo $projectsByCategoryChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/projectsByCategory.blade.php ENDPATH**/ ?>