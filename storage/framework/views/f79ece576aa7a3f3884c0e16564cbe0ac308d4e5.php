<!-- CARVINGS -->

<?php if(Auth::user()->can('carving-manage') || Auth::user()->hasRole('admin')): ?>

   <div class="col col-md-6 col-xl-12">
      <a href="<?php echo e(route('admin.carvings.index')); ?>">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-steel elevation-1">
               <i class="<?php echo e(config('icons.carvings')); ?>"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Carvings</span>
               <span class="info-box-number">
                  Total : 
                  <?php echo e($carvingsCount); ?>

               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

<?php endif; ?><?php /**PATH C:\sites\l7\resources\views/admin/dashboard/infoBoxes/carvings.blade.php ENDPATH**/ ?>