<div class="row mb-2">

   <div class="col">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-create')): ?>
         <a href="<?php echo e(route('admin.finishes.edit', $finish->id)); ?>" class="btn btn-sm btn-primary">
            <i class="<?php echo e(config('icons.edit')); ?>"></i>
            Edit Finish
         </a>
      <?php endif; ?>

      <a href="<?php echo e(route('admin.finishes.index')); ?>"
         class="btn btn-sm btn-light border">
         <i class="<?php echo e(config('icons.back')); ?>"></i>
         Back
      </a>
   </div>

   <div class="col">

      <div class="float-right px-1">
         

         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="<?php echo e(config('icons.help')); ?>"></i>
            Help
         </a>
      </div>
      
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/show/topbar.blade.php ENDPATH**/ ?>