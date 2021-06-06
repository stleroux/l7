
<div class="card card-trans-2 mb-2">

	<div class="card-header bg-primary p-2">
		Account Information
	</div>

	<div class="card-body p-2">
		<div class="row">
			<div class="col-6">
				<?php echo $__env->make('admin.users.forms.fields.previous_login_date', ['label'=>'Previous Login', 'disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>				
			</div>
			<div class="col-6">
				<?php echo $__env->make('admin.users.forms.fields.last_login_date', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-6">
				<?php echo $__env->make('admin.users.forms.fields.login_count', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
			</div>
			<div class="col-6">
				<?php echo $__env->make('admin.users.forms.fields.member_since', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
			</div>
		</div>
	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/profile/show/account.blade.php ENDPATH**/ ?>