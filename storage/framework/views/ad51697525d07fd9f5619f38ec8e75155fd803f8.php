

<div class="tab-pane fade" id="recipe-settings" role="tabpanel" aria-labelledby="recipe-settings-tab">

	<div class="row">
	
		<div class="col-xl-2">
			<?php echo $__env->make('admin.recipes.form.fields.personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

	<div class="row">

		<div class="col">
			<?php echo $__env->make('admin.recipes.form.fields.author_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/create/tabs/settings.blade.php ENDPATH**/ ?>