<?php if($carvings->count() > 0): ?>

   
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
            <th>Name</th>
            <th>Category</th>
            <th>Tags</th>
            <th>Views</th>
            <th>Images</th>
            <th>Finish(es)</th>
            <th>Material(s)</th>
            
            
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $carvings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carving): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="<?php echo e($carving->id); ?>"
                     id="<?php echo e($carving->id); ?>" />
                     <label for="<?php echo e($carving->id); ?>"></label>
                  </div>
               </td>
               <td><?php echo e($carving->id); ?></td>
               <td><a href="<?php echo e(route('admin.carvings.show', $carving->id)); ?>"><?php echo e($carving->name); ?></a></td>
               <td><?php echo e($carving->category); ?></td>
               <td>
                  <?php $__currentLoopData = $carving->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="badge badge-secondary">
                        <?php echo e($tag->name); ?>                        
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </td>
               <td><?php echo e($carving->views); ?></td>
               <td><?php echo e($carving->images()->count()); ?></td>
               <td><?php echo e($carving->finishes()->count()); ?></td>
               <td><?php echo e($carving->materials()->count()); ?></td>
               
               
               <td class="text-right">
                  <?php echo $__env->make('admin.carvings.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>

   </table>
   
<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/grid.blade.php ENDPATH**/ ?>