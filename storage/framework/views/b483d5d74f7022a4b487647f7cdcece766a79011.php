<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">

            <a href="<?php echo e(route('admin.invoicer.clients.edit', $client->id)); ?>" class="btn btn-sm btn-secondary">
               <i class="far fa-edit"></i>
               Edit Client
            </a>

            <a href="<?php echo e(route('admin.invoicer.invoices.create', $client->id)); ?>" class="btn btn-sm btn-secondary">
               <i class="far fa-plus-square"></i>
               Add New Invoice
            </a>

	      <a href="<?php echo e(route('admin.invoicer.clients')); ?>" class="btn btn-sm btn-primary">
				<i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
				Clients List
			</a>
      </div>

   </div>

</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/show/topbar.blade.php ENDPATH**/ ?>