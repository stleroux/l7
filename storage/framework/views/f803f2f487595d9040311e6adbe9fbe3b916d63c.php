<?php if($message = Session::get('primary')): ?>
	<div class="alert alert-primary" id="success-alert"><?php echo e($message); ?></div>
	

<?php elseif($message = Session::get('secondary')): ?>
	<div class="alert alert-secondary" id="success-alert"><?php echo e($message); ?></div>
	

<?php elseif($message = Session::get('success')): ?>
	<div class="alert alert-success" id="success-alert"><?php echo e($message); ?></div>
	

<?php elseif($message = Session::get('danger')): ?>
	<div class="alert alert-danger" id="success-alert"><?php echo e($message); ?></div>
	

<?php elseif($message = Session::get('warning')): ?>
	<div class="alert alert-warning" id="success-alert"><?php echo e($message); ?></div>
	

<?php elseif($message = Session::get('info')): ?>
	<div class="alert alert-info" id="success-alert"><?php echo e($message); ?></div>
	




<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/common/messages.blade.php ENDPATH**/ ?>