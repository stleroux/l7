<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['invoicer-dashboard','invoicer-ledger','invoicer-invoice','invoicer-client','invoicer-product'])): ?>
   
   <li class="nav-item has-treeview <?php echo e((Request::is('admin/invoicer*')) ? 'menu-open' : ''); ?>">
      
      <a href="#" class="nav-link <?php echo e((Request::is('admin/invoicer*')) ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.invoicer')); ?>"></i>
         <p>
            Invoicer
            <i class="right fas fa-angle-left"></i>
         </p>
      </a>

      <ul class="nav nav-treeview">
      
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-dashboard')): ?>
            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer') ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-dashboard')); ?>"></i>
                  <p>Dashboard</p>
               </a>
            </li>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-ledger')): ?>
            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.ledger')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer/ledger*') ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-ledger')); ?>"></i>
                  <p>Ledger</p>
               </a>
            </li>
         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'quotes')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/quotes*') ? 'active' : ''); ?>

                                  <?php echo e((Request()->has('type') && request()->type == "quote") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-quotes')); ?>"></i>
                  <p>Quotes</p>
                  <div class="float-right badge badge-light"><?php echo e($quotesCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'estimates')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/estimate*') ? 'active' : ''); ?>

                                  <?php echo e(Request::is('admin/invoicer/invoices/create') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "estimate") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-estimates')); ?>"></i>
                  <p>Estimates</p>
                  <div class="float-right badge badge-light"><?php echo e($estimatesCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'invoiced')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/invoiced*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "invoiced") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-invoiced')); ?>"></i>
                  <p>Invoiced</p>
                  <div class="float-right badge badge-light"><?php echo e($invoicedCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'paid')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/paid*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "paid") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-paid')); ?>"></i>
                  <p>Paid</p>
                  <div class="float-right badge badge-light"><?php echo e($paidCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'workOrders')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/workOrders*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "workOrder") ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "workOrders") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-workOrders')); ?>"></i>
                  <p>Work Orders</p>
                  <div class="float-right badge badge-light"><?php echo e($workOrdersCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'completed')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/completed*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "completed") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-completed')); ?>"></i>
                  <p>Completed</p>
                  <div class="float-right badge badge-light"><?php echo e($completedCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'shipped')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/shipped*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "shipped") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-shipped')); ?>"></i>
                  <p>Shipped</p>
                  <div class="float-right badge badge-light"><?php echo e($shippedCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'pickedUp')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/pickedUp*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "pickedUp") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-pickedUp')); ?>"></i>
                  <p>Picked Up</p>
                  <div class="float-right badge badge-light"><?php echo e($pickedUpCount); ?></div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices', 'canceled')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices/canceled*') ? 'active' : ''); ?>

                                  <?php echo e((request()->has('type') && request()->type == "canceled") ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-canceled')); ?>"></i>
                  <p>Canceled</p>
                  <div class="float-right badge badge-light"><?php echo e($canceledCount); ?></div>
               </a>
            </li>
            
            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.invoices')); ?>"
                  class="nav-link <?php echo e(Request::is('admin/invoicer/invoices') ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-all')); ?>"></i>
                  <p>All</p>
                  <div class="float-right badge badge-light"><?php echo e($invoicesCount); ?></div>
               </a>
            </li>

         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-product')): ?>
            <li class="nav-item ml-1">
               <a href="<?php echo e(route('admin.invoicer.products')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer/products*') ? 'active' : ''); ?>">
                  <i class="<?php echo e(config('icons.invoicer-products')); ?>"></i>
                  <p>Products</p>
               </a>
            </li>
         <?php endif; ?>

      </ul>
   
   </li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/invoicer.blade.php ENDPATH**/ ?>