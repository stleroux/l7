


<div class="tab-pane fade active show" id="homepage" role="tabpanel" aria-labelledby="homepage-tab">

	<div class="container-fluid">

		<?php echo $__env->make('admin.frontend.general.homepage.fields.greeting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.frontend.general.homepage.fields.newUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<p class="bg-info p-2">Sections of Interests</p>
		<?php echo $__env->make('admin.frontend.general.homepage.fields.carvings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.frontend.general.homepage.fields.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.frontend.general.homepage.fields.recipes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.frontend.general.homepage.fields.blogs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/frontend/general/homepage/index.blade.php ENDPATH**/ ?>