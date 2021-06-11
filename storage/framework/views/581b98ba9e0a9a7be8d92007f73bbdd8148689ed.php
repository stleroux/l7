<?php if($roles->count() > 0): ?>

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
            <th>Name</th>
            <th class="d-none d-lg-table-cell">Permissions</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="<?php echo e($role->id); ?>"
                        id="<?php echo e($role->id); ?>" />
                     <label for="<?php echo e($role->id); ?>"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell"><?php echo e($role->id); ?></td>
               <td nowrap="nowrap"><?php echo e($role->name); ?></td>
               <td class="d-none d-lg-table-cell">
                  
                  <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <span class="badge badge-dark">
                        <?php echo e($p->name); ?>

                     </span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($role->created_at): ?><?php echo e($role->created_at); ?><?php endif; ?>">
                  <?php echo e($role->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($role->updated_at): ?><?php echo e($role->updated_at); ?><?php endif; ?>">
                  <?php echo e($role->updated_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="text-right">
                  <?php echo $__env->make('admin.roles.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/roles/index/grid.blade.php ENDPATH**/ ?>