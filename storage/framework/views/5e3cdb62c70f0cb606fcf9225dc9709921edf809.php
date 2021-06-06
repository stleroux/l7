<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary">

	<div class="card-header p-2">
		
		Tag Information
		
	</div>

	<div class="card-body p-2">
		<div class="row">
			<?php echo $__env->make('admin.tags.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('admin.tags.forms.fields.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div> <!-- Card body -->

</div><!-- Card -->
<?php /**PATH C:\sites\l7\resources\views/admin/tags/forms/form.blade.php ENDPATH**/ ?>