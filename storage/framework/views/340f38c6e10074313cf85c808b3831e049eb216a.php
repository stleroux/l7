<?php if($categories->count() > 0): ?>

   

      <table id="datatable" class="table table-hover table-sm">

         <thead>
            <tr>
               <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
               <th>ID</th>
               <th>Category Name</th>
               <th>Parent Category</th>
               
               
               <?php if(Route::currentRouteName() == 'admin.categories.trashed'): ?>
                  <th>Deleted</th>
               <?php endif; ?>
               <th class="no-sort"></th>
            </tr>
         </thead>

         <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr class="<?php echo e(($category->deleted_at ? 'text-danger' : '')); ?>">
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                           type="checkbox"
                           class="record checkbox_record"
                           name="entries[]"
                           onchange="showHide(this.checked)"
                           value="<?php echo e($category->id); ?>"
                           id="<?php echo e($category->id); ?>" />
                        <label for="<?php echo e($category->id); ?>"></label>
                     </div>
                  </td>
                  <td><?php echo e($category->id); ?></td>
                  <td><?php echo e(ucfirst($category->name)); ?></td>
                  <td>
                     <?php echo e($category->parent_id ? ucfirst($category->parent->name) : ''); ?> <small>(Parent:<?php echo e($category->parent_id); ?>)</small>
                  </td>
                  
                  
                  <?php if(Route::currentRouteName() == 'admin.categories.trashed'): ?>
                     <td title="<?php if($category->deleted_at): ?><?php echo e($category->deleted_at); ?><?php endif; ?>"><?php if($category->deleted_at): ?><?php echo e($category->deleted_at->toDateString()); ?><?php endif; ?></td>
                  <?php endif; ?>
                  <td class="text-right">
                     <?php echo $__env->make('admin.categories.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </tbody>

      </table>

   
   
<?php else: ?>
   
      <?php echo e(config('settings.noRecordsFound')); ?>

   
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/categories/index/grid.blade.php ENDPATH**/ ?>