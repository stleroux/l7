<!-- MODULES -->

<div class="container-fluid p-0">
	<div class="row-col">
		<div class="card">
			<div class="card-body">
    			<table class="table table-sm table-striped">
        			<thead>
     					
     					<?php echo $__env->make('admin.settings.fields.columnHeaders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
        			</thead>
        			<tbody>
						<?php echo $__env->make('admin.settings.fields.modules.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.modules.carvings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.modules.darts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.modules.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.settings.fields.modules.recipes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/inc/modules.blade.php ENDPATH**/ ?>