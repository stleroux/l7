

<div class="tab-pane fade" id="post-settings" role="tabpanel" aria-labelledby="post-settings-tab">

	<div class="row">
	
		<div class="col-xl-1">
			
		</div>

	</div>

	<div class="row">

		<div class="col">
			<?php echo $__env->make('admin.posts.forms.fields.private_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/forms/tabs/settings.blade.php ENDPATH**/ ?>