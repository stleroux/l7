<div class="row">

   <div class="col-xl-9">
      <ul class="nav nav-tabs justify-content-start">
         <li class="nav-item">
            <a class="nav-link <?php echo e((Request::is('admin/invoicer/invoices') ? 'active' : '')); ?>" href="<?php echo e(route('admin.invoicer.invoices')); ?>">
               <i class="fas fa-list"></i>
               All
               <span class="badge badge-info"><?php echo e(App\Models\InvoicerInvoice::all()->count()); ?></span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?php echo e((Request::is('admin/invoicer/invoices/logged') ? 'active' : '')); ?>" href="<?php echo e(route('admin.invoicer.invoices.logged')); ?>">
               <i class="fas fa-sign-out-alt"></i>
               Logged
               <span class="badge badge-info text-right"><?php echo e(App\Models\InvoicerInvoice::where('status', 'logged')->count()); ?></span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?php echo e((Request::is('admin/invoicer/invoices/invoiced') ? 'active' : '')); ?>" href="<?php echo e(route('admin.invoicer.invoices.invoiced')); ?>">
               <i class="far fa-file-alt"></i>
               Invoiced
               <span class="badge badge-info text-right"><?php echo e(App\Models\InvoicerInvoice::where('status', 'invoiced')->count()); ?></span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?php echo e((Request::is('admin/invoicer/invoices/paid') ? 'active' : '')); ?>" href="<?php echo e(route('admin.invoicer.invoices.paid')); ?>">
               <i class="far fa-money-bill-alt"></i>
               Paid
               <span class="badge badge-info text-right"><?php echo e(App\Models\InvoicerInvoice::where('status', 'paid')->count()); ?></span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?php echo e((Request::is('admin/invoicer/invoices/unpaid') ? 'active' : '')); ?>" href="<?php echo e(route('admin.invoicer.invoices.unpaid')); ?>">
               <i class="fas fa-ban"></i>
               Un-Paid
               <span class="badge badge-info text-right"><?php echo e(App\Models\InvoicerInvoice::where('status', '!=', 'paid')->count()); ?></span>
            </a>
         </li>
      </ul>
   </div>

   <div class="col-xl-3">
      <span class="float-right">
         
            <?php if(Request::is('admin/invoicer/invoices/logged')): ?>
               <a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced_all')); ?>" class="btn btn-sm btn-outline-primary">
                  <i class="far fa-file-alt"></i>
                  Mark All as Invoiced
               </a>
            <?php endif; ?>
            <?php if(Request::is('admin/invoicer/invoices/invoiced')): ?>
               <a href="<?php echo e(route('admin.invoicer.invoices.status_paid_all')); ?>" class="btn btn-sm btn-outline-primary">
                  <i class="far fa-money-bill-alt"></i>
                  Mark All as Paid
               </a>
            <?php endif; ?>
         

         
            <a href="<?php echo e(route('admin.invoicer.invoices.create')); ?>" class="btn btn-sm btn-secondary">
               <i class="far fa-plus-square"></i>
               Add New Invoice
            </a>
         
      </span>
   </div>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/index/topbar.blade.php ENDPATH**/ ?>