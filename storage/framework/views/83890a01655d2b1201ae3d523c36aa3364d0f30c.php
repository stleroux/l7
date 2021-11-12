<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.features.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.features.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.features')); ?>"></i>
         All Features
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Feature::count()); ?>

         </div>
      </a>

      <!-- Generate links based on options in Model -->
      <?php $__currentLoopData = App\Models\Feature::statusOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusOptionKey => $statusOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
         <a href="<?php echo e(route('admin.features.'.strtolower(str_replace(" ", "", $statusOptionValue)))); ?>"
            class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.features.'.strtolower(str_replace(" ", "", $statusOptionValue))) ? 'buttonActive' : ''); ?>">
            <i class="<?php echo e(config('icons.features')); ?>"></i>
            <?php echo e(ucfirst($statusOptionValue)); ?>

            <div class="badge badge-dark badge-pill float-right mt-1">
               <?php echo e(App\Models\Feature::where('status', $statusOptionKey)->count()); ?>

            </div>
         </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <a href="<?php echo e(route('admin.features.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.features.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Features
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Feature::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/features/index/blocks/pages.blade.php ENDPATH**/ ?>