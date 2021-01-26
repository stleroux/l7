<?php if($finishes->count() > 0): ?>

      <table class="table table-hover table-sm" id="datatable">

         <thead>
            <tr>
               <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
               <th>ID</th>
               <th>Name</th>
               <th>Type</th>
               <th>Color Name</th>
               <th>Sheen</th>
               <th>Created On</th>
               <th>Updated On</th>
               <th class="no-sort text-center" width="140px">Actions</th>
            </tr>
         </thead>
         
         <tbody>
            <?php $__currentLoopData = $finishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $finish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="<?php echo e($finish->id); ?>"
                        id="<?php echo e($finish->id); ?>" />
                        <label for="<?php echo e($finish->id); ?>"></label>
                     </div>
                  </td>
                  <td><?php echo e($finish->id); ?></td>
                  <td><a href="<?php echo e(route('admin.finishes.show', $finish->id)); ?>"><?php echo e($finish->name); ?></a></td>
                  <td><?php echo e($finish->type); ?></td>
                  <td><?php echo e($finish->color_name); ?></td>
                  <td><?php echo e($finish->sheen); ?></td>
                  
                  <td data-order="<?php echo e($finish->created_at); ?>"><?php echo e($finish->created_at); ?></td>
                  <td data-order="<?php echo e($finish->updated_at); ?>"><?php echo e($finish->updated_at ? $finish->updated_at->format('M d, Y') : 'no data found'); ?></td>
                  <td class="text-right">
                     <?php echo $__env->make('admin.finishes.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
         
      </table>

<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/index/grid.blade.php ENDPATH**/ ?>