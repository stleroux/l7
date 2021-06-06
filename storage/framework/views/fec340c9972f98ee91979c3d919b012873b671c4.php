<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.tags.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.tags.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.tags')); ?>"></i>
         All Tags
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Tag::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.tags.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.tags.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Tags
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Tag::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/tags/index/blocks/pages.blade.php ENDPATH**/ ?>