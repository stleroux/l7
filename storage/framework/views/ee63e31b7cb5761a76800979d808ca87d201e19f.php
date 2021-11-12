

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.')); ?>"></i>
   My Invoices and Estimates
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Invoices and Estimates</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   

   <div class="card">

      <?php if($invoices->count() > 0): ?>
         <table id="" class="table table-hover table-stripped table-sm">
            <thead>
               <tr>
                  <th>Invoice #</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Invoiced</th>
                  <th>Paid</th>
                  <th class="text-right">Charged</th>
                  <th class="text-right">Deposits</th>
                  <th class="text-right">Discounts</th>
                  <th class="text-right">Payments</th>
                  <th class="text-right">Owed</th>
                  <th></th>
               </tr>
            </thead>

            <tbody>
               <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($invoice->id); ?></td>
                  <td>
                     <?php if($invoice->status === 'estimate'): ?>
                        <span class="badge badge-secondary" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
                     <?php elseif($invoice->status === 'logged'): ?>
                        <span class="badge badge-info" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
                     <?php elseif($invoice->status === 'invoiced'): ?>
                        <span class="badge badge-warning" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
                     <?php else: ?>
                        <span class="badge badge-success" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
                     <?php endif; ?>
                  </td>
                  <td><?php echo e($invoice->created_at); ?></td>
                  <td><?php echo e($invoice->invoiced_at); ?></td>
                  <td><?php echo e($invoice->paid_at); ?></td>
                  <td class="text-right"><?php echo e(number_format($invoice->sub_total, 2, '.', ', ')); ?>$</td>
                  <td class="text-right"><?php echo e(number_format($invoice->deposits, 2, '.', ', ')); ?>$</td>
                  <td class="text-right"><?php echo e(number_format($invoice->discounts, 2, '.', ', ')); ?>$</td>
                  <td class="text-right"><?php echo e(number_format($invoice->payments, 2, '.', ', ')); ?>$</td>
                  <td class="text-right"><?php echo e(number_format($invoice->total, 2, '.', ', ')); ?>$</td>
                  <td class="text-right">
                     <a href="<?php echo e(route('viewInvoice', $invoice)); ?>" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Invoice">
                        <i class="<?php echo e(config('icons.view')); ?>"></i>
                        View
                     </a>
                     <a href="<?php echo e(route('downloadPDFInvoice', $invoice)); ?>" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="Generate PDF">
                        <i class="<?php echo e(config('icons.view')); ?>"></i>
                        Generate PDF
                     </a>
                  </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      <?php else: ?>
         <div class="card-body">
            <?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
               No estimates found in the system.
            <?php else: ?>
               No invoices found in the system.
            <?php endif; ?>
         </div>
      <?php endif; ?>

      <?php if($invoices->count() > 0): ?>
         <div class="card-footer">
            <div class="row">
               <div class="col-sm-6 text-left">
                  Showing records <?php echo e($invoices->firstItem()); ?> to <?php echo e($invoices->lastItem()); ?> of <?php echo e($invoices->total()); ?>

               </div>
               <div class="col-sm-6 text-right">
                  <?php echo $invoices->appends(request()->except('page'))->render(); ?>

               </div>
            </div>
         </div>
      <?php endif; ?>
   </div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/invoices/index.blade.php ENDPATH**/ ?>