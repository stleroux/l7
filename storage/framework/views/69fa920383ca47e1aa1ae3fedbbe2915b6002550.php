<?php if(Auth::user()->can('permission-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-6">
		<h3 class="text-dark"><?php echo e($featuresByTypeChart->options['chart_title']); ?></h3>
		<?php echo $featuresByTypeChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/featuresByType.blade.php ENDPATH**/ ?>