<?php if(auth()->guard()->guest()): ?>
	
	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
			<div class="card-title">
		      <i class="fa fa-arrow-right"></i>
				Want to see more?
				<i class="fa fa-arrow-left"></i>				
			</div>
	   </div>
	   
	   <div class="card-body p-1">
	   	<?php echo Config::get('settings.viewMore'); ?>

	   </div>

	</div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/blocks/view_more.blade.php ENDPATH**/ ?>