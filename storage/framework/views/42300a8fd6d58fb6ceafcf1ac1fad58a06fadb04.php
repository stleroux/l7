<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.faqs.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.faqs.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.faq')); ?>"></i>
         All Questions
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Faq::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.faqs.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.faqs.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Questions
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Faq::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/faqs/index/blocks/pages.blade.php ENDPATH**/ ?>