<!-- INVOICER -->

<div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header bg-primary p-2">Company</div>
		<div class="card-body p-2 m-0">
			<div class="row">
				<?php echo $__env->make('admin.settings.fields.invoicer.companyName', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Address</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					<?php echo $__env->make('admin.settings.fields.invoicer.address_1', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.address_2', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.city', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.state', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.zip', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Contact</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					<?php echo $__env->make('admin.settings.fields.invoicer.telephone', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.fax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.email', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.website', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Settings</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					<?php echo $__env->make('admin.settings.fields.invoicer.wsibNo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.wsibRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.hstNo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.hstRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('admin.settings.fields.invoicer.incomeTaxRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Other</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					<?php echo $__env->make('admin.settings.fields.invoicer.version', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/inc/invoicer.blade.php ENDPATH**/ ?>