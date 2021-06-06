


<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.')); ?>"></i>
   General Site Settings
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrumb'); ?>
   
   <li class="breadcrumb-item">General</li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
   
<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>




      
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            <?php echo $__env->make('admin.frontend.general.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="card-body p-2">
            <div class="tab-content" id="general-tabContent">
               <?php echo $__env->make('admin.frontend.general.homepage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.frontend.general.notes.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               
               
               
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   <?php echo $__env->make('admin.frontend.general.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/frontend/general/index.blade.php ENDPATH**/ ?>