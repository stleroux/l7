<?php if($bugs->count() > 0): ?>

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
            <th class="d-none d-lg-table-cell">Creator</th>
            <th class="d-none d-lg-table-cell">Status</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $bugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="<?php echo e($bug->id); ?>"
                        id="<?php echo e($bug->id); ?>" />
                     <label for="<?php echo e($bug->id); ?>"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell"><?php echo e($bug->id); ?></td>
               <td nowrap="nowrap"><a href="<?php echo e(route('admin.bugs.show', $bug)); ?>"><?php echo e($bug->title); ?></a></td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap"><?php echo e($bug->creator->username); ?></td>
               

               <td nowrap="nowrap">
                  <form action="<?php echo e(route('admin.bugs.updateStatus', $bug)); ?>" method="POST">
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
                        <?php $__currentLoopData = $bug->statusOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusOptionKey => $statusOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($statusOptionKey); ?>" <?php echo e($bug->status == $statusOptionValue ? 'selected' : ''); ?>><?php echo e($statusOptionValue); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </form>
               </td>

               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($bug->created_at): ?><?php echo e($bug->created_at); ?><?php endif; ?>">
                  
                  <?php echo e($bug->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="d-none d-lg-table-cell" title="<?php if($bug->updated_at): ?><?php echo e($bug->updated_at); ?><?php endif; ?>">
                  <?php echo e($bug->updated_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="text-right">
                  <?php echo $__env->make('admin.bugs.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/bugs/index/grid.blade.php ENDPATH**/ ?>