<!-- PERMISSIONS -->

<?php if(Auth::user()->can('permission-manage') || Auth::user()->hasRole('admin')): ?>

	<div class="col col-md-6 col-xl-12">
	   <a href="<?php echo e(route('admin.permissions.index')); ?>">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-warning elevation-1">
	            <i class="<?php echo e(config('icons.permissions')); ?>"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h4">Permissions</span>
	            <span class="info-box-number">
	               
	               Total : <?php echo e($permissionsCount); ?>

	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/infoBoxes/permissions.blade.php ENDPATH**/ ?>