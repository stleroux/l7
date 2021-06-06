<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
            <a href="<?php echo e(route('admin.invoicer.clients.create')); ?>" class="btn btn-sm btn-primary">
               <i class="<?php echo e(config('icons.user')); ?>"></i>
               Add New Client
            </a>
         <?php endif; ?>
      </div>

   </div>

</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/index/topbar.blade.php ENDPATH**/ ?>