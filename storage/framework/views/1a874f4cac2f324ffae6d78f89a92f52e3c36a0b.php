<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.carvings.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.carvings.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.carvings')); ?>"></i>
         All Carvings
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Carving::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.carvings.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.carvings.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Carvings
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Carving::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/blocks/pages.blade.php ENDPATH**/ ?>