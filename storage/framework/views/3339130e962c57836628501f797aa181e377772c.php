
<div class="card mb-2 card-trans-4" style="background-color: #800000">
   
   <div class="card-header text-light p-1">
   	<div class="card-title">
			<i class="fa fa-comment" aria-hidden="true"></i>
			Leave a comment   		
   	</div>
	</div>

	<?php if(auth()->guard()->check()): ?>
		<div class="card-body card-trans-6 p-2 m-0">
			<form action="<?php echo e(route('recipes.storeComment',  $recipe->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
							<textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
							<span class="text-danger"><?php echo e($errors->first('comment')); ?></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-sm btn-success btn-block">Add Comment</button>
					</div>
				</div>

			</form>
		</div>

		<div class="card-footer card-trans-6 p-1">
			Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.
		</div>

	<?php else: ?>

		<div class="card-body card-trans-4 p-2 m-0">
			Please login to leave a comment
		</div>
	
	</div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/leave_comment.blade.php ENDPATH**/ ?>