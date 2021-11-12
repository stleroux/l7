<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
   <?php if($invoices): ?>

      <style>
      .table tr {
         cursor: pointer;
      }
      .hiddenRow {
         padding: 0 4px !important;
         /*background-color: #F4F4F4;*/
         background-color: #C0C0C0;
         font-size: 13px;
      }
      </style>

      
      <div class="card card-default collapsed-card no-print">
         
         <div class="card-header">
            <div class="card-title">Invoices</div>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-card-widget="maximize">
                  <i class="fas fa-expand"></i>
               </button>
            </div>
         </div>

         <div class="card-body">
            <table class="table table-sm table-striped table-hover">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Status</th>
                     <th>Amount</th>
                     <th>HST</th>
                     <th>SubTotal</th>
                     <th>Deposits</th>
                     <th>Discounts</th>
                     <th>Payments</th>
                     <th>Total</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr data-toggle="collapse" data-target="#demo<?php echo e($invoice->id); ?>" class="accordion-toggle">
                        <td><?php echo e($invoice->id); ?></td>
                        <td><?php echo e($invoice->status); ?></td>
                        <td>$<?php echo e(number_format($invoice->total, 2)); ?></td>
                        <td><?php echo e($invoice->hst); ?></td>
                        <td><?php echo e($invoice->sub_total); ?></td>
                        <td><?php echo e($invoice->deposits); ?></td>
                        <td><?php echo e($invoice->discounts); ?></td>
                        <td><?php echo e($invoice->payments); ?></td>
                        <td><?php echo e($invoice->total); ?></td>
                        <td><a href="<?php echo e(route('admin.invoicer.invoices.show', $invoice)); ?>" target="_blank">Show</a></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         </div>

      </div>


      <script type="text/javascript">
         // $('.accordian-body').on('show.bs.collapse', function () {
         // $(this).closest("row.col")
            // .find(".collapse.in")
            // .not(this)
            // .collapse('toggle')
      // })

         $('.accordion-toggle').click(function(){
         $('.hiddenRow').hide();
         $(this).next('tr').find('.hiddenRow').show();
      });
      </script>

   <?php endif; ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/users/show/sections/invoices.blade.php ENDPATH**/ ?>