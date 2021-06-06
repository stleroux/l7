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
					
					<?php echo Config::get('settings.viewMore'); ?>

				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/common/view_more.blade.php ENDPATH**/ ?>