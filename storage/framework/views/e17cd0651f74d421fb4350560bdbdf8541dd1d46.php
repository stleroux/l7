

<div class="tab-pane fade active show" id="post-general" role="tabpanel" aria-labelledby="post-general-tab">
	
	<div class="row">

		<div class="col-xl-6">
			<?php echo $__env->make('admin.posts.form.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-3">
			<?php echo $__env->make('admin.posts.form.fields.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-3">
		   <?php echo $__env->make('admin.posts.form.fields.published_at', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-xl-12">
		   <?php echo $__env->make('admin.posts.form.fields.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6">
			<?php echo $__env->make('admin.posts.form.fields.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/create/general.blade.php ENDPATH**/ ?>