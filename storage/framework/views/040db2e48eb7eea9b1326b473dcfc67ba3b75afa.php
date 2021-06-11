<?php if($features->count() > 0): ?>

   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            <th class="d-none d-lg-table-cell">#</th>
            <th>Title</th>
            <th>Likes</th>
            <th class="d-none d-lg-table-cell">Creator</th>
            <th class="d-none d-lg-table-cell">Status</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="<?php echo e($feature->id); ?>"
                        id="<?php echo e($feature->id); ?>" />
                     <label for="<?php echo e($feature->id); ?>"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell"><?php echo e($feature->id); ?></td>
               <td nowrap="nowrap"><a href="<?php echo e(route('admin.features.show', $feature)); ?>"><?php echo e($feature->title); ?></a></td>
               <td nowrap="nowrap"><?php echo e($feature->likes()->count()); ?></td>
               <td nowrap="nowrap"><?php echo e($feature->user->username); ?></td>
               
               <td nowrap="nowrap">
                  <form action="<?php echo e(route('admin.features.updateStatus', $feature)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field("PUT"); ?>

                     <select
                        name="status"
                        id="status"
                        class="form-control form-control-sm <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        onchange="this.form.submit()"
                     >
                        <?php $__currentLoopData = $feature->statusOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusOptionKey => $statusOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($statusOptionKey); ?>" <?php echo e($feature->status == $statusOptionValue ? 'selected' : ''); ?>><?php echo e($statusOptionValue); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </form>
               </td>

               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($feature->created_at): ?><?php echo e($feature->created_at); ?><?php endif; ?>">
                  <?php echo e($feature->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="d-none d-lg-table-cell" title="<?php if($feature->updated_at): ?><?php echo e($feature->updated_at); ?><?php endif; ?>">
                  <?php echo e($feature->updated_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="text-right">
                  <?php echo $__env->make('admin.features.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/features/index/grid.blade.php ENDPATH**/ ?>