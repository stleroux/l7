

<div class="tab-pane fade" id="post-notes" role="tabpanel" aria-labelledby="post-notes-tab">

	<div class="row">

		<div class="col">
			<?php echo $__env->make('admin.posts.forms.fields.public_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		
	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/tabs/notes.blade.php ENDPATH**/ ?>