<?php if($errors->any()): ?>
	<div class="alert alert-danger text-light px-2">
		<?php echo e(Config::get('settings.formSubmissionError')); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/common/form_submission_error.blade.php ENDPATH**/ ?>