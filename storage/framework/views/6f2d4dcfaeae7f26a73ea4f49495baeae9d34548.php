<?php if($materials->count() > 0): ?>

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
            <th>Name</th>
            <th>Type</th>
            <th>Created On</th>
            <th>Updated On</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>
      
      <tbody>
         <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="<?php echo e($material->id); ?>"
                     id="<?php echo e($material->id); ?>" />
                     <label for="<?php echo e($material->id); ?>"></label>
                  </div>
               </td>
               <td><?php echo e($material->id); ?></td>
               <td><a href="<?php echo e(route('admin.materials.show', $material->id)); ?>"><?php echo e($material->name); ?></a></td>
               <td><?php echo e($material->type); ?></td>
               
               <td data-order="<?php echo e($material->created_at); ?>">
                  <?php echo e($material->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td data-order="<?php echo e($material->updated_at); ?>"><?php echo e($material->updated_at->format(config('settings.dateFormat'))); ?></td>
               <td class="text-right">
                  <?php echo $__env->make('admin.materials.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>

   </table>
   
<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/index/grid.blade.php ENDPATH**/ ?>