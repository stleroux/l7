<div class="card card-primary">

   <div class="card-header p-2">Pages</div>
   
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.bugs.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.bugs.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.bugs')); ?>"></i>
         All Bugs
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Bug::count()); ?>

         </div>
      </a>

      <!-- Generate links based on options in Model -->
      <?php $__currentLoopData = App\Models\Bug::statusOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusOptionKey => $statusOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <a href="<?php echo e(route('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue)))); ?>"
            class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) ? 'buttonActive' : ''); ?>">
            <i class="<?php echo e(config('icons.bugs')); ?>"></i>
            <?php echo e(ucfirst($statusOptionValue)); ?>

            <div class="badge badge-dark badge-pill float-right mt-1">
               <?php echo e(App\Models\Bug::where('status', $statusOptionKey)->count()); ?>

            </div>
         </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <a href="<?php echo e(route('admin.bugs.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.bugs.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.bugs')); ?> text-pink"></i>
         Trashed Bugs
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Bug::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
   
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/index/functions/pages.blade.php ENDPATH**/ ?>