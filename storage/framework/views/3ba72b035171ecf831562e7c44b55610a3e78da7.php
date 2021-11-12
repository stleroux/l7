
<div class="col-md-3">
	<div class="card card-secondary mb-2">
		<div class="card-header p-1">Views Last Month</div>
		<div class="card-body p-1 text-center">
         
         <?php echo e(views($recipe)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count()); ?>

      </div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/show/fields/viewsLastMonth.blade.php ENDPATH**/ ?>