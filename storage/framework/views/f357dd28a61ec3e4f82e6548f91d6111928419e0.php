<?php if($tags->count() > 0): ?>

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
            <th>Category</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="<?php echo e($tag->id); ?>"
                        id="<?php echo e($tag->id); ?>" />
                     <label for="<?php echo e($tag->id); ?>"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell"><?php echo e($tag->id); ?></td>
               <td nowrap="nowrap"><?php echo e($tag->name); ?></td>
               <td nowrap="nowrap"><?php echo e($tag->category); ?></td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($tag->created_at): ?><?php echo e($tag->created_at); ?><?php endif; ?>"><?php echo e($tag->created_at->toDateString()); ?></td>
               <td class="d-none d-lg-table-cell" title="<?php if($tag->updated_at): ?><?php echo e($tag->updated_at); ?><?php endif; ?>"><?php echo e($tag->updated_at->toDateString()); ?></td>
               <td class="text-right">
                  <?php echo $__env->make('admin.tags.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/index/grid.blade.php ENDPATH**/ ?>