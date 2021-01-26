<!-- APP SETTINGS -->

<div class="row">
	<?php echo $__env->make('admin.settings.fields.home.appName', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
	<?php echo $__env->make('admin.settings.fields.home.appURL', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
	<?php echo $__env->make('admin.settings.fields.home.siteVersionNo', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/inc/home.blade.php ENDPATH**/ ?>