<?php if($blocks->count() > 0): ?>

   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            
            <th>Title</th>
            <th class="d-none d-lg-table-cell">Page</th>
            <th class="d-none d-lg-table-cell">Name</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               
               <td nowrap="nowrap"><a href="<?php echo e(route('admin.blocks.show', $block)); ?>"><?php echo e($block->title); ?></a></td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap"><?php echo e(ucwords($block->page)); ?></td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap"><?php echo e(ucwords($block->name)); ?></td>

               

               

               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($block->created_at): ?><?php echo e($block->created_at); ?><?php endif; ?>">
                  
                  <?php echo e($block->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="d-none d-lg-table-cell" title="<?php if($block->updated_at): ?><?php echo e($block->updated_at); ?><?php endif; ?>">
                  <?php echo e($block->updated_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="text-right">
                  <?php echo $__env->make('admin.blocks.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      
   </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/blocks/index/grid.blade.php ENDPATH**/ ?>