<div class="row mb-2">


   <div class="col">

      <div class="float-right">

	      <a href="<?php echo e(route('admin.invoicer.clients')); ?>" class="btn btn-sm btn-outline-secondary">
            
            <i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
            Back to Clients
         </a>

         <a href="<?php echo e(route('admin.invoicer.invoices')); ?>" class="btn btn-sm btn-outline-secondary">
            
            <i class="<?php echo e(config('icons.invoicer-invoices')); ?>"></i>
            Back to Invoices
         </a>

         <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="<?php echo e(Config('icons.add')); ?>"></i>
            Create Client
         </button>

         <?php if(request()->has('type')): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices.estimates')); ?>" class="btn btn-sm btn-warning">
         <?php else: ?>
            <a href="<?php echo e(route('admin.invoicer.invoices')); ?>" class="btn btn-sm btn-warning">
         <?php endif; ?>
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
                  Cancel
            </a>

         <?php if(request()->has('type')): ?>
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="<?php echo e(config('icons.save')); ?>"></i>
               Create Estimate
            </button>
         <?php else: ?>
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="<?php echo e(config('icons.save')); ?>"></i>
               Create Invoice
            </button>
         <?php endif; ?>
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/create/topbar.blade.php ENDPATH**/ ?>