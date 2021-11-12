<?php if($errors->any()): ?>
	<?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($error->message); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger text-light px-2">
		<?php echo e(Config::get('settings.formSubmissionError')); ?>

	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/common/form_submission_error.blade.php ENDPATH**/ ?>