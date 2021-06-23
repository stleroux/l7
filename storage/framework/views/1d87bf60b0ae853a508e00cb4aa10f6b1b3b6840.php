<?php if(Auth::user()->can('bug-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-6">
		<h3 class="text-dark"><?php echo e($bugsByTypeChart->options['chart_title']); ?></h3>
		<?php echo $bugsByTypeChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/bugsByType.blade.php ENDPATH**/ ?>