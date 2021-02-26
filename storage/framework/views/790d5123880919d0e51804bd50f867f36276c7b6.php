<!-- APP SETTINGS -->

<div class="container-fluid p-0">
	<div class="row-col">
		<div class="card">
			<div class="card-body">
    			<table class="table table-sm table-striped">
        			<thead>
     					
     					<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
        			</thead>
        			<tbody>
						<?php echo $__env->make('admin.settings.fields.home.appName', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.home.appURL', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.home.siteVersionNo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/inc/home.blade.php ENDPATH**/ ?>