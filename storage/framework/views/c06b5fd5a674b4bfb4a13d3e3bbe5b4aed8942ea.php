<!-- FEATURES -->

<?php if(Auth::user()->can('feature-manage') || Auth::user()->hasRole('admin')): ?>

	<div class="col-6 col-xl-4">
	   <a href="<?php echo e(route('admin.features.new')); ?>">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-secondary elevation-1">
	            <i class="<?php echo e(config('icons.features')); ?>"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h5">New Features</span>
	            <span class="info-box-number">
	               
	               Total : <?php echo e($newFeaturesCount); ?>

	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/topBoxes/features.blade.php ENDPATH**/ ?>