

<div class="tab-pane fade" id="recipe-notes" role="tabpanel" aria-labelledby="recipe-notes-tab">

	<div class="row">

		<div class="col">
			<?php echo $__env->make('admin.recipes.form.fields.public_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		
	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/create/notes.blade.php ENDPATH**/ ?>