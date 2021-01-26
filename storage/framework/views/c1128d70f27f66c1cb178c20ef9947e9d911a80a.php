

<div class="tab-pane fade active show" id="recipe-general" role="tabpanel" aria-labelledby="recipe-general-tab">
	
	<div class="row">

		<div class="col-xl-6">
			<?php echo $__env->make('admin.recipes.form.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-3">
			<?php echo $__env->make('admin.recipes.form.fields.category', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-3">
		   <?php echo $__env->make('admin.recipes.form.fields.published_at', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6">
			<?php echo $__env->make('admin.recipes.form.fields.ingredients', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-6">
			<?php echo $__env->make('admin.recipes.form.fields.methodology', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/create/tabs/general.blade.php ENDPATH**/ ?>