<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
   	      <a href="<?php echo e(route('admin.invoicer.clients')); ?>" class="btn btn-sm btn-outline-secondary">
               <i class="fas fa-backward"></i>
               Back to Clients
            </a>
         

         
            <a href="<?php echo e(route('admin.invoicer.invoices')); ?>" class="btn btn-sm btn-outline-secondary">
               <i class="fas fa-backward"></i>
               Back to Invoices
            </a>
         

         <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="<?php echo e(Config('icons.add')); ?>"></i>
            Create Client
         </button>

         

         <button type="submit" name="save" class="btn btn-sm btn-primary">
            <i class="<?php echo e(config('icons.save')); ?>"></i>
            Create Invoice
         </button>
      </div>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/create/topbar.blade.php ENDPATH**/ ?>