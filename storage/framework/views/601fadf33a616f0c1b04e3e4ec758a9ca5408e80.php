<?php if($projects->count() > 0): ?>

   
   <table class="table table-hover table-sm" id="datatable">

      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            
            <th>Name</th>
            <th>Category</th>
            <th>Views</th>
            <th>Likes</th>
            <th>Images</th>
            <th>Finish(es)</th>
            <th>Material(s)</th>
            <th>Created On</th>
            <th>Updated On</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="<?php echo e($project->id); ?>"
                     id="<?php echo e($project->id); ?>" />
                     <label for="<?php echo e($project->id); ?>"></label>
                  </div>
               </td>
               
               <td><a href="<?php echo e(route('admin.projects.show', $project->id)); ?>"><?php echo e(ucwords($project->name)); ?></a></td>
               <td><?php echo e($project->category); ?></td>
               <td class="text-center"><?php echo e($project->views); ?></td>
               <td class="text-center"><?php echo e($project->likes()->count()); ?></td>
               <td class="text-center"><?php echo e($project->images()->count()); ?></td>
               <td class="text-center"><?php echo e($project->finishes()->count()); ?></td>
               <td class="text-center"><?php echo e($project->materials()->count()); ?></td>
               <td nowrap="nowrap" title="<?php if($project->created_at): ?><?php echo e($project->created_at); ?><?php endif; ?>">
                  <?php echo e($project->created_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td title="<?php if($project->updated_at): ?><?php echo e($project->updated_at); ?><?php endif; ?>">
                  <?php echo e($project->updated_at->format(config('settings.dateFormat'))); ?>

               </td>
               <td class="text-right">
                  <?php echo $__env->make('admin.projects.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>

   </table>
   
<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/index/grid.blade.php ENDPATH**/ ?>