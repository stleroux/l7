

<div class="tab-pane fade" id="recipe-information" role="tabpanel" aria-labelledby="recipe-information-tab">

	<div class="row">

		<div class="col-xs-6 col-md-3 col-lg-2">
	   	<?php echo $__env->make('admin.recipes.form.fields.servings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	   </div>
	   
	   <div class="col-xs-6 col-md-3 col-lg-2">
		   <?php echo $__env->make('admin.recipes.form.fields.prep_time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		
		<div class="col-xs-6 col-md-3 col-lg-2">
		   <?php echo $__env->make('admin.recipes.form.fields.cook_time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		
		<div class="col-xs-6 col-md-3 col-lg-2">
	   	<?php echo $__env->make('admin.recipes.form.fields.source', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	   </div>
	
	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/edit/tabs/information.blade.php ENDPATH**/ ?>