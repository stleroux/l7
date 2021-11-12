<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.offerings.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.offerings.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.carvings')); ?>"></i>
         All Offerings
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Offering::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.offerings.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.offerings.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Offerings
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Offering::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/index/blocks/pages.blade.php ENDPATH**/ ?>