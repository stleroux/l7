<div class="card card-trans-4">

	<div class="card-header section_header">
		<div class="card-title">Bug Information</div>
	</div>
	
	<div class="card-body pb-0">
		
		<div class="row">
			<div class="col">
				<?php echo $__env->make('UI.bugs.forms.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col">
				<?php echo $__env->make('UI.bugs.forms.fields.page_url', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-xl-2">
				<?php echo $__env->make('UI.bugs.forms.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<?php echo $__env->make('UI.bugs.forms.fields.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</div> <!-- Card body -->

	<div class="card-footer p-1 border">
		<?php echo Config::get('settings.formFieldsRequired'); ?>

	</div>

</div><!-- Card -->
<?php /**PATH C:\sites\l7\resources\views/UI/bugs/forms/form.blade.php ENDPATH**/ ?>