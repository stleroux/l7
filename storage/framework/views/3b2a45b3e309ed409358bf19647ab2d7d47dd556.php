<?php if(auth()->guard()->guest()): ?>



	<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

	   <div class="card-header bg-info p-1">
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
<?php /**PATH C:\sites\l7\resources\views/UI/projects/blocks/view_more.blade.php ENDPATH**/ ?>