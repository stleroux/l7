<div class="col-sm-8">
	<div class="card card-secondary mb-2">
		<div class="card-header p-1">Ingredients</div>
		<div class="card-body p-1">
			<?php if(auth()->guard()->check()): ?>
				<?php echo $recipe->ingredients; ?>

			<?php else: ?>
				<?php if(strlen($recipe->ingredients)): ?>
					
					<?php echo Str::limit($recipe->ingredients, $limit = 52, ' [More...]'); ?>

				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/ingredients.blade.php ENDPATH**/ ?>