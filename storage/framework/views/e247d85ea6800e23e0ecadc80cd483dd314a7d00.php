<div class="card card-trans-4">

	<div class="card-header section_header">
		<div class="card-title">Feature Information</div>
	</div>

	<div class="card-body pb-0">

		<div class="row">
			<div class="col">
				<?php echo $__env->make('UI.features.forms.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-xl-2">
				<?php echo $__env->make('UI.features.forms.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<?php echo $__env->make('UI.features.forms.fields.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</div> <!-- Card body -->

	<div class="card-footer p-1">
		<?php echo Config::get('settings.formFieldsRequired'); ?>

	</div>

</div><!-- Card -->
<?php /**PATH C:\sites\l7\resources\views/UI/features/forms/form.blade.php ENDPATH**/ ?>