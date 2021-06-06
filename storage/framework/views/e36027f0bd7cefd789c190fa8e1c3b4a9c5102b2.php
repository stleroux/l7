<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.finishes.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.finishes.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.finishes')); ?>"></i>
         All Finishes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Finish::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.finishes.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.finishes.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Finishes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Finish::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/finishes/index/blocks/pages.blade.php ENDPATH**/ ?>