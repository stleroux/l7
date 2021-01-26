<?php if(Auth::user()->id == $recipe->user_id): ?>
	<div class="col-md-12">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Author's Private Notes <small>(Only showed to the creator of the item)</small></div>
			<div class="card-body p-1 text-dark">
				<?php if($recipe->private_notes): ?> 
					<?php echo $recipe->private_notes; ?>

				<?php else: ?>
					N/A
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/private_notes.blade.php ENDPATH**/ ?>