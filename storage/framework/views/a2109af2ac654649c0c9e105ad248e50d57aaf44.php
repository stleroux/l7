<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         <?php if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0): ?>
            <a href="<?php echo e(route('admin.invoicer.activities.create', $invoice)); ?>" class="btn btn-sm btn-outline-primary">
               <i class="far fa-plus-square"></i>
               New Activity
            </a>
         <?php endif; ?>

         <?php if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced', $invoice->id)); ?>" class="btn btn-sm btn-outline-primary" title="Invoice">
               <i class="far fa-fw fa-file-alt"></i>
               Invoice
            </a>
         <?php endif; ?>

	      <a href="<?php echo e(route('admin.invoicer.invoices')); ?>" class="btn btn-sm btn-outline-secondary">
            <i class="fa fa-backward"></i>
            Cancel
         </a>

         <?php if($invoice->status != 'paid'): ?>
            <button type="submit" class="btn btn-sm btn-primary">
               <i class="<?php echo e(config('icons.save')); ?>"></i>
               Update Invoice
            </button>
         <?php endif; ?>
      </div>

   </div>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/edit/topbar.blade.php ENDPATH**/ ?>