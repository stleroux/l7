

<?php $__env->startSection('stylesheet'); ?>
<link href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <?php echo $__env->make('admin.invoicer.invoices.index.headerIcons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <span class="h3">Invoicer ::
      <?php echo $__env->make('admin.invoicer.invoices.index.headerTypes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
   </span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <?php echo $__env->make('admin.invoicer.invoices.index.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('admin.invoicer.invoices.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card">
      <div class="card-body m-0 p-2">
         <?php if($invoices->count() > 0): ?>
            <table class="table table-hover table-stripped table-sm" id="datatable">
               <thead>
                  <tr>
                     <th>Invoice #</th>
                     <?php if(Request::is('admin/invoicer/invoices')): ?>
                        <th>Status</th>
                     <?php endif; ?>
                     <?php if(Request::is('admin/invoicer/invoices/quotes') || Request::is('admin/invoicer/invoices/estimates')): ?>
                        <th>Created</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/invoiced')): ?>
                        <th>Created</th>
                        <th>Invoiced</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/paid')): ?>
                        <th>Invoiced</th>
                        <th>Paid</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/workOrders')): ?>
                        <th>Paid</th>
                        <th>WorkOrdered</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/completed')): ?>
                        <th>WorkOrderes</th>
                        <th>Completed</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/shipped')): ?>
                        <th>Completed</th>
                        <th>Shipped</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/pickedUp')): ?>
                        <th>Completed</th>
                        <th>PickedUp</th>
                     <?php elseif(Request::is('admin/invoicer/invoices/canceled')): ?>
                        <th>Canceled</th>
                     <?php endif; ?>
                     <th>Last Name</th>
                     <th>First Name</th>
                     <th>Company Name</th>
                     <th>Items</th>
                     <th>Charged</th>
                     <th class="text-right">Deposits</th>
                     <th class="text-right">Discounts</th>
                     <th class="text-right">Payments</th>
                     <th class="text-right">Owed</th>
                     <th class="no-sort"></th>
                  </tr>
               </thead>

               <tbody>
                  <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>

                     <td><?php echo e($invoice->id); ?></td>
                     
                     <?php if(Request::is('admin/invoicer/invoices')): ?>
                        <td>
                           <?php if($invoice->status == 'quote'): ?>
                              <i class="<?php echo e(config('icons.invoicer-quotes')); ?>" style="font-size: 20px" title="Quote" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'estimate'): ?>
                              <i class="<?php echo e(config('icons.invoicer-estimates')); ?>" style="font-size: 20px" title="Estimate" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'invoiced'): ?>
                              <i class="<?php echo e(config('icons.invoicer-invoiced')); ?>" style="font-size: 20px" title="Invoiced" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'paid'): ?>
                              <i class="<?php echo e(config('icons.invoicer-paid')); ?>" style="font-size: 20px" title="Paid" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'workOrder'): ?>
                              <i class="<?php echo e(config('icons.invoicer-workOrders')); ?>" style="font-size: 20px" title="Work Order" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'completed'): ?>
                              <i class="<?php echo e(config('icons.invoicer-completed')); ?>" style="font-size: 20px" title="Completed" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'shipped'): ?>
                              <i class="<?php echo e(config('icons.invoicer-shipped')); ?>" style="font-size: 20px" title="Shipped" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'pickedUp'): ?>
                              <i class="<?php echo e(config('icons.invoicer-pickedUp')); ?>" style="font-size: 20px" title="Picked Up" data-toggle="tooltip"></i>
                           <?php endif; ?>
                           <?php if($invoice->status == 'canceled'): ?>
                              <i class="<?php echo e(config('icons.invoicer-canceled')); ?>" style="font-size: 20px" title="Canceled" data-toggle="tooltip"></i>
                           <?php endif; ?>
                        </td>
                     <?php endif; ?>
                     
                     <?php if(Request::is('admin/invoicer/invoices/quotes') || Request::is('admin/invoicer/invoices/estimates')): ?>
                        <td><?php echo e($invoice->created_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/invoiced')): ?>
                        <td><?php echo e($invoice->created_at); ?></td>
                        <td><?php echo e($invoice->invoiced_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/paid')): ?>
                        <td><?php echo e($invoice->invoiced_at); ?></td>
                        <td><?php echo e($invoice->paid_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/workOrders')): ?>
                        <td><?php echo e($invoice->paid_at); ?></td>
                        <td><?php echo e($invoice->workOrder_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/completed')): ?>
                        <td><?php echo e($invoice->workOrder_at); ?></td>
                        <td><?php echo e($invoice->completed_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/shipped')): ?>
                        <td><?php echo e($invoice->completed_at); ?></td>
                        <td><?php echo e($invoice->shipped_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/pickedUp')): ?>
                        <td><?php echo e($invoice->completed_at); ?></td>
                        <td><?php echo e($invoice->pickedUp_at); ?></td>
                     <?php elseif(Request::is('admin/invoicer/invoices/canceled')): ?>
                        <td><?php echo e($invoice->canceled_at); ?></td>
                     <?php endif; ?>
                     
                     <td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
                           <a href="<?php echo e(route('admin.users.show', $invoice->client->id)); ?>"><?php echo e($invoice->client->last_name); ?></a>
                        <?php else: ?>
                           <?php echo e($invoice->client->last_name); ?>

                        <?php endif; ?>
                     </td>

                     <td>
                        <?php echo e($invoice->client->first_name); ?>                    
                     </td>

                     <td>
                        <?php echo e($invoice->client->company_name); ?>

                     </td>
                     <td>
                        <?php echo e($invoice->invoiceItems->count()); ?>

                     </td>

                     <td class="text-right"><?php echo e(number_format($invoice->sub_total, 2, '.', ', ')); ?>$</td>
                     <td class="text-right"><?php echo e(number_format($invoice->deposits, 2, '.', ', ')); ?>$</td>
                     <td class="text-right"><?php echo e(number_format($invoice->discounts, 2, '.', ', ')); ?>$</td>
                     <td class="text-right"><?php echo e(number_format($invoice->payments, 2, '.', ', ')); ?>$</td>
                     <td class="text-right"><?php echo e(number_format($invoice->total, 2, '.', ', ')); ?>$</td>
                     <td>
                        <div class="flex">

                           <?php if($invoice->status == 'quote'): ?>
                              <form action="<?php echo e(route('admin.invoicer.invoices.refreshData', $invoice)); ?>" method="POST" class="float-right d-block pl-1">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('PUT'); ?>
                                 <button type="submit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" title="Refresh Amounts">
                                    <i class="<?php echo e(config('icons.refresh')); ?>"></i>
                                 </button>
                              </form>
                           <?php endif; ?>

                           <form action="<?php echo e(route('admin.invoicer.invoices.destroy',[$invoice->id])); ?>" method="POST" 
                              onsubmit="return confirm('Do you really want to delete this invoice and related items?\n\nThis will PERMANENTLY DELETE the invoice and related items.');"
                              class="float-right d-block">
                              <?php echo csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE" />

                              <?php if($invoice->status == 'quote' || $invoice->status == 'estimate'): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoiceItems.create', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Billable">
                                    <i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
                                 </a>
                              <?php endif; ?>

                              <?php if($invoice->invoiceItems->count() > 0): ?>
                                 <a href="<?php echo e(route('admin.invoicer.activities.create', $invoice)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Activity">
                                    <i class="<?php echo e(config('icons.invoicer-newActivity')); ?>"></i>
                                 </a>
                              <?php endif; ?>

                              <?php if($invoice->status == "quote"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Invoiced">
                                    <i class="<?php echo e(config('icons.invoicer-invoiced')); ?>"></i>
                                 </a>
                              <?php endif; ?>
                              
                              <?php if($invoice->status == "estimate"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Invoiced">
                                    <i class="<?php echo e(config('icons.invoicer-invoiced')); ?>"></i>
                                 </a>
                              <?php endif; ?>

                              <?php if($invoice->status == "invoiced"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_quoted', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Quote">
                                    <i class="<?php echo e(config('icons.invoicer-quotes')); ?>"></i>
                                 </a>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_estimated', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Estimate">
                                    <i class="<?php echo e(config('icons.invoicer-estimates')); ?>"></i>
                                 </a>
                                 
                              <?php endif; ?>
                              
                              <?php if($invoice->status == "paid"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_workOrdered', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Work Order">
                                    <i class="fas fa-fw fa-angle-double-right"></i>
                                 </a>
                              <?php endif; ?>
                              
                              <?php if($invoice->status == "workOrder"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_completed', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Completed">
                                    <i class="fas fa-fw fa-angle-double-right"></i>
                                 </a>
                              <?php endif; ?>
                              
                              <?php if($invoice->status == "completed"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_shipped', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Shipped">
                                    <i class="<?php echo e(config('icons.invoicer-shipped')); ?>"></i>
                                 </a>
                              <?php endif; ?>

                              <?php if($invoice->status == "completed"): ?>
                                 <a href="<?php echo e(route('admin.invoicer.invoices.status_pickedUp', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Picked Up">
                                    <i class="<?php echo e(config('icons.invoicer-pickedUp')); ?>"></i>
                                 </a>
                              <?php endif; ?>

                              <a href="<?php echo e(route('admin.invoicer.invoices.show', [$invoice->id, 'type'=>$invoice->status])); ?>" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View <?php echo e(Str::ucfirst($invoice->status)); ?>">
                                 <i class="<?php echo e(config('icons.view')); ?>"></i>
                              </a>

                              <a href="<?php echo e(route('admin.invoicer.invoices.edit', [$invoice->id, 'type'=>$invoice->status])); ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit <?php echo e(Str::ucfirst($invoice->status)); ?>">
                                 <i class="<?php echo e(config('icons.edit')); ?>"></i>
                              </a>



                              <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete <?php echo e(Str::ucfirst($invoice->status)); ?>">
                                 <i class="<?php echo e(config('icons.trash')); ?>"></i>
                              </button>

                           </form>
                        </div>
                     </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <?php echo e(config('settings.noRecordsFound')); ?>

         <?php endif; ?>
      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/index.blade.php ENDPATH**/ ?>