<?php if(Auth::user()->can('invoicer-invoice') || Auth::user()->hasRole('admin')): ?>
	<div class="col-xl-12">
		<h3 class="text-dark"><?php echo e($billablesByItemChart->options['chart_title']); ?></h3>
		<?php echo $billablesByItemChart->renderHtml(); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/charts/billablesByItem.blade.php ENDPATH**/ ?>