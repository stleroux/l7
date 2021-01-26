<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.materials.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.materials.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.materials')); ?>"></i>
         All Materials
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Material::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.materials.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.materials.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Materials
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Material::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/index/sections/functions/pages.blade.php ENDPATH**/ ?>