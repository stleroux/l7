<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.categories.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.categories.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.categories')); ?>"></i>
         All Categories
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Category::count()); ?>

         </div>
      </a>
      
      <a href="<?php echo e(route('admin.categories.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.categories.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Categories
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Category::trashedCount()->count()); ?>

         </div>
      </a>



      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/categories/index/blocks/pages.blade.php ENDPATH**/ ?>