
      <div class="card card-outline card-primary">
         <div class="card-header">
            <div class="card-title">Finish(es) Used In This Project</div>
         </div>
         <?php if($project->finishes->count() > 0): ?>
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Type</th>
                     <th>Color</th>
                     <th>Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $project->finishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($f->name); ?></td>
                        <td><?php echo e($f->type); ?></td>
                        <td><?php echo e($f->color_name); ?></td>
                        <td><?php echo e($f->manufacturer); ?></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <div class="card-body">N/A</div>
         <?php endif; ?>
      </div>
   
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/show/finishes.blade.php ENDPATH**/ ?>