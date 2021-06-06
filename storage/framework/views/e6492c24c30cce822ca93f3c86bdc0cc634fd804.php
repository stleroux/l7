<!-- INVOICER -->

<div class="container-fluid p-0">
	<div class="row-col">
		<div class="card">
			<div class="card-body">
    			<table class="table table-sm table-striped">
        			<thead>
     					<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Company'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     					<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
        			</thead>
        			<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.companyName', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
					<thead>
						<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</thead>
					<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.address_1', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.address_2', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.city', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.state', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.zip', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
					<thead>
						<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Contact'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</thead>
					<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.telephone', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.fax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.email', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.website', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
					<thead>
						<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Settings'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</thead>
					<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.wsibNo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.wsibRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.hstNo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.hstRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.invoicer.incomeTaxRate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
					<thead>
						<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Notifications'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</thead>
					<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.usersToNotify', ['users'=>$users], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
					<thead>
						<?php echo $__env->make('admin.settings.fields.tableHeader', ['title'=>'Other'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</thead>
					<tbody>
						<?php echo $__env->make('admin.settings.fields.invoicer.version', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/inc/invoicer.blade.php ENDPATH**/ ?>