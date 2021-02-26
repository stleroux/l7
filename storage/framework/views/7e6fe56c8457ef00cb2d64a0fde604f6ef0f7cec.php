<?php if($users->count() > 0): ?>
   
   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            
               <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
            
            <th>#</th>
            <th>Username</th>
            
            
            <th class="d-none d-sm-table-cell">Email</th>
            
            <th class="d-none d-md-table-cell">Roles</th>
            
            
            <th class="d-none d-lg-table-cell">Created</th>
            
            <?php if(Route::currentRouteName() == 'admin.users.trashed'): ?>
               <th class="d-none d-lg-table-cell">Deleted</th>
            <?php endif; ?>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="<?php echo e(($user->account_status == 1) ? 'text-dark' : 'text-danger'); ?>">
               
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                           type="checkbox"
                           class="record checkbox_record"
                           name="entries[]"
                           onchange="showHide(this.checked)"
                           value="<?php echo e($user->id); ?>"
                           id="<?php echo e($user->id); ?>" />
                        <label for="<?php echo e($user->id); ?>"></label>
                     </div>
                  </td>
               
               <td><?php echo e($user->id); ?></td>
               <td><?php echo e($user->username); ?></td>
               
               
               <td class="d-none d-sm-table-cell"><?php echo e($user->email); ?></td>
               
               <td class="d-none d-md-table-cell"><?php echo e(implode(', ', $user->roles()->get()->pluck('name')->toArray())); ?></td>
               
               
               <td class="d-none d-md-table-cell" title="<?php if($user->created_at): ?><?php echo e($user->created_at); ?><?php endif; ?>">
                  <?php echo e($user->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               
               <?php if(Route::currentRouteName() == 'admin.users.trashed'): ?>
                  <td title="<?php if($user->deleted_at): ?><?php echo e($user->deleted_at); ?><?php endif; ?>">
                     <?php if($user->deleted_at): ?><?php echo e($user->deleted_at->format(config('settings.dateFormat'))); ?><?php endif; ?>
                  </td>
               <?php endif; ?>
               <td class="text-right" nowrap="nowrap">
                  <?php echo $__env->make('admin.users.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/grid.blade.php ENDPATH**/ ?>