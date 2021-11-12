<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tr>
      <td colspan="6" width="50%"><h1>INVOICE</h1></td>
      <td colspan="6">
         <div class="col-sm-12">
            <div class="text-center" style="font-size: 16pt">
               <?php echo e(config('invoicer.companyName')); ?>

            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 text-center">
               <?php echo e(config('invoicer.address_1') . ', '); ?>

               <?php echo e((Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : ''); ?>

               <?php echo e((Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : ''); ?>

               <br />
               <?php if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax'))): ?>
                  <i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?> &nbsp;
                  <i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

               <?php elseif(Config::get('invoicer.telephone')): ?>
                  <i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?>

               <?php elseif(Config::get('invoicer.fax')): ?>
                  <i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

               <?php endif; ?>

               <br />
               <?php if(Config::get('invoicer.email') && (Config::get('invoicer.website'))): ?>
                  <i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?> &nbsp;
                  <i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

               <?php elseif(Config::get('invoicer.email')): ?>
                  <i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?>

               <?php elseif(Config::get('invoicer.website')): ?>
                  <i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

               <?php endif; ?>

               <br />
               <?php if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo'))): ?>
                  WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?> &nbsp;
                  HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

               <?php elseif(Config::get('invoicer.wsibNo')): ?>
                  WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?>

               <?php elseif(Config::get('invoicer.hstNo')): ?>
                  HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

               <?php endif; ?>
            </div>
         </div>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12">
         <h3 style="margin-top: 0px;margin-bottom: 0px; background-color: #c0c0c0">Invoice Information</h3>
      </th>
   </tr>
   <tr>
      <td colspan="6">
         <table cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th align="left">Billed To</th>
            </tr>
            <tr>
               <td>
                  <?php if($invoice->client->company_name): ?>
                     <?php echo e($invoice->client->company_name); ?> <br />
                  <?php endif; ?>
                  <?php if($invoice->client->contact_name): ?>
                     <?php echo e($invoice->client->contact_name); ?> <br />
                  <?php endif; ?>
                  <?php if($invoice->client->address): ?>
                     <?php echo e($invoice->client->address); ?> <br />
                  <?php endif; ?>
                  
                  <?php if($invoice->client->city && $invoice->client->province): ?>
                     <?php echo e($invoice->client->city); ?>, <?php echo e($invoice->client->province); ?> <br />
                  <?php elseif($invoice->client->city && !$invoice->client->province): ?>
                     <?php echo e($invoice->client->city); ?> <br />
                  <?php elseif($invoice->client->province && !$invoice->client->city): ?>
                     <?php echo e($invoice->client->province); ?> <br />                  
                  <?php endif; ?>

                  <?php if($invoice->client->postal_code): ?>
                     <?php echo e($invoice->client->postal_code); ?> <br />
                  <?php endif; ?>
                  <?php if($invoice->client->telephone): ?>
                     <?php echo e($invoice->client->telephone); ?>

                  <?php endif; ?>
                  
                  
                  
                  
                  
                  
               </td>
            </tr>
         </table>
      </td>
      <td colspan="6" valign="top">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="50%" align="right">Invoice N<sup>o</sup></th>
               <td width="50%" align="right"><?php echo e($invoice->id); ?></td>
            </tr>
            <tr>
               <th width="50%" align="right">Invoice Date</th>
               <td width="50%" align="right"><?php echo e($invoice->invoiced_at); ?></td>
            </tr>
            <tr>
               <th width="50%" align="right">Paid Date</th>
               <td width="50%" align="right"><?php echo e($invoice->paid_at); ?></td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Work Description</th>
   </tr>
   <tr>
      <td colspan="12"><?php echo e($invoice->work_description ?? 'N/A'); ?></td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0;">Billable Items</th>
   </tr>
   <tr>
      <td colspan="12">
         <?php if($invoice->invoiceItems->count() > 0): ?>
            <table width="100%" cellpdding="0" cellspacing="0" border="0">
            
               <thead>
                  <tr>
                     <th align="left" width="55%">Product</th>
                     
                     
                     <th align="center" width="15%">Quantity</th>
                     <th align="right" width="15%">Price</th>
                     <th align="right" width="15%">Amount</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $invoice->invoiceItems->sortByDesc('work_date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($item->product); ?></td>
                        
                        
                        <td align="center" nowrap="nowrap"><?php echo e($item->quantity); ?></td>
                        <td align="right" nowrap="nowrap"><?php echo e(number_format($item->price, 2, '.', ' ')); ?>$</td>
                        <td align="right" nowrap="nowrap"><?php echo e(number_format($item->total, 2, '.', ' ')); ?>$</td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <table cellspacing="0" cellpadding="0" border="0">
               <tr>
                  <td colspan="12">No related billable items found.</td>
               </tr>
            </table>
         <?php endif; ?>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <td colspan="12">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="80%" align="right">SubTotal</th>
               <td width="20%" align="right"><?php echo e(($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" align="right">HST</th>
               <td width="20%" align="right"><?php echo e(number_format($invoice->hst, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Discount</th>
               <td width="20%" align="right"><?php echo e(number_format($invoice->discounts, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Deposit</th>
               <td width="20%" align="right"><?php echo e(number_format($invoice->deposits, 2, '.', ' ')); ?>$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Payments</th>
               <td width="20%" align="right"><?php echo e(number_format($invoice->payments, 2, '.', ' ')); ?>$</td>
            </tr>

            <tr>
               <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
               <th width="80%" align="right">Total Owing</th>
               <td width="20%" align="right"><?php echo e(number_format($invoice->total, 2, '.', ' ')); ?>$</td>
            </tr>
         </table>
      </td>
   </tr>


<tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Terms and Conditions</th>
   </tr>
   <tr>
      <td colspan="12">
         
         <?php echo $__env->make('admin.invoicer.termsAndConditions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </td>
   </tr>


</table>

</body>
</html>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/invoicedPDF.blade.php ENDPATH**/ ?>