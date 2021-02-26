<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-audits')): ?>
   <?php if(isset($audits)): ?>

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

      <div class="card card-default collapsed-card">
         
         <div class="card-header">
            <div class="card-title">Audits</div>
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
            <table class="table table-sm" style="border-collapse:collapse;">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Action</th>
                     <th>By</th>
                     <th>Date</th>
                     <th>Url</th>
                     <th>IP Address</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $audits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr data-toggle="collapse" data-target="#demo<?php echo e($audit->id); ?>" class="accordion-toggle">
                        <td><?php echo e($audit->id); ?></td>
                        <td><?php echo e($audit->event); ?></td>
                        <td><?php echo e($audit->user->username); ?></td>
                        <td><?php echo e($audit->created_at->diffForHumans()); ?></td>
                        <td><?php echo e($audit->url); ?></td>
                        <td><?php echo e($audit->ip_address); ?></td>                    
                     </tr>
                     <tr>
                        <td colspan="12" class="hiddenRow">
                           <div class="accordian-body collapse" id="demo<?php echo e($audit->id); ?>">
                              <div class="row mt-2">
                                 <div class="col-12 mb-0">
                                    <table class="table table-sm table-bordered mb-0">
                                       <tr>
                                          <th>Browser</th>
                                          <td><?php echo e($audit->user_agent); ?></td>
                                       </tr>
                                    </table>
                                 </div>
                                 <div class="col-6">
                                    <table class="table table-sm table-bordered table-hover">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Old Value</th>
                                          </tr>
                                       </thead>
                                       <?php $__currentLoopData = $audit->old_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tbody>
                                             <tr>
                                                <td><b><?php echo e($attribute); ?></b></td>
                                                <td><?php echo e($value); ?></td>
                                             </tr>
                                          </tbody>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                 </div>
                                 <div class="col-6">
                                    <table class="table table-bordered table-hover">
                                       <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>New Value</th>
                                       </tr>
                                       </thead>
                                       <?php $__currentLoopData = $audit->new_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                             <td><b><?php echo e($attribute); ?></b></td>
                                             <td><?php echo e($data); ?></td>
                                          </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </td>
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/common/audits.blade.php ENDPATH**/ ?>