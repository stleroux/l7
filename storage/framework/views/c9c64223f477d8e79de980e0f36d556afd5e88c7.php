<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         <a href="<?php echo e(route('admin.invoicer.invoiceItems.create', $invoice)); ?>" class="btn btn-sm btn-outline-secondary">
            
            <i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
            Add Billable
         </a>

         <?php if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0): ?>
            <a href="<?php echo e(route('admin.invoicer.activities.create', $invoice)); ?>" class="btn btn-sm btn-outline-secondary">
               
               <i class="<?php echo e(config('icons.invoicer-newActivity')); ?>"></i>
               Add Activity
            </a>
         <?php endif; ?>

         <?php if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" title="Invoice">
               
               <i class="<?php echo e(config('icons.invoicer-markAsInvoiced')); ?>"></i>
               Mark as Invoiced
            </a>
         <?php endif; ?>

         <?php if(Str::lower($invoice->status == "estimate")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices.estimates')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php else: ?>
   	      <a href="<?php echo e(route('admin.invoicer.invoices')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if($invoice->status != 'paid'): ?>
            <button type="submit" class="btn btn-sm btn-primary">
               <i class="<?php echo e(config('icons.save')); ?>"></i>
               Update <?php echo e((Str::lower($invoice->status) == "estimate" ? "Estimate" : "Invoice")); ?>

            </button>
         <?php endif; ?>
      </div>

   </div>

</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/topbar.blade.php ENDPATH**/ ?>