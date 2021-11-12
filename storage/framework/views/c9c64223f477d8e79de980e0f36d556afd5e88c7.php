<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         <?php if($invoice->status == 'quote' || $invoice->status == "estimate"): ?>
            <a href="<?php echo e(route('admin.invoicer.invoiceItems.create', [$invoice, 'type'=>$invoice->status])); ?>" class="btn btn-sm btn-secondary">
               <i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
               Add Billable
            </a>
         <?php endif; ?>

         <?php if(($invoice->status == 'quote' || $invoice->status == 'estimate' || $invoice->status == 'invoiced') && ($invoice->invoiceItems->count() > 0)): ?>
            <a href="<?php echo e(route('admin.invoicer.activities.create', [$invoice, 'type'=>$invoice->status])); ?>" class="btn btn-sm btn-secondary">
               <i class="<?php echo e(config('icons.invoicer-newActivity')); ?>"></i>
               Add Activity
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "quote")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'quotes')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "estimate")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'estimates')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "invoiced")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'invoiced')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "paid")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'paid')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "workOrder")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'workOrders')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "completed")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'completed')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "shipped")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'shipped')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "pickedUp")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'pickedUp')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <?php if(request()->has('type') && (request()->type == "canceled")): ?>
            <a href="<?php echo e(route('admin.invoicer.invoices', 'canceled')); ?>" class="btn btn-sm btn-warning">
               <i class="<?php echo e(config('icons.cancel')); ?>"></i>
               Cancel
            </a>
         <?php endif; ?>

         <button type="submit" class="btn btn-sm btn-primary">
            <i class="<?php echo e(config('icons.save')); ?>"></i>
            Update <?php echo e((Str::lower($invoice->status) == "estimate" ? "Estimate" : "Invoice")); ?>

         </button>

      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/topbar.blade.php ENDPATH**/ ?>