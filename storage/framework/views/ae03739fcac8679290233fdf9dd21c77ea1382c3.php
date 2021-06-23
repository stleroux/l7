<?php if(Auth::user()->can('user-manage') || Auth::user()->hasRole('admin')): ?>
	<div class="col col-xl-6">
		<h3 class="text-dark"><?php echo e($usersPerMonthChart->options['chart_title']); ?></h3>
		<?php echo $usersPerMonthChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/usersPerMonth.blade.php ENDPATH**/ ?>