<?php if(auth()->guard()->guest()): ?>
	<div class="row p-0 pb-2">
		<div class="col-sm-12">
			<div class="card bg-dark">
				<div class="card-header card_header p-2">
					<i class="fa fa-arrow-right"></i>
					Want to see more?
					<i class="fa fa-arrow-left"></i>
				</div>
				<div class="card-body card_body p-1">
					To view more details, please <a href="<?php echo e(route('login')); ?>" class="text text-info">LOGIN</a> if you are already a member or <a href="<?php echo e(route('register')); ?>" class="text text-info">REGISTER</a> an account if you are not.
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/common/view_more.blade.php ENDPATH**/ ?>