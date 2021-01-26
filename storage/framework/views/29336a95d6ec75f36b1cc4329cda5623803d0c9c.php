
      <div class="card card-outline card-primary">
         <div class="card-header">
            <div class="card-title">Material(s) Used In This Project</div>
         </div>
         <?php if($project->materials->count() > 0): ?>
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Type</th>
                     <th>Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $project->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($m->name); ?></td>
                        <td><?php echo e($m->type ?? "N/A"); ?></td>
                        <td><?php echo e($m->manufacturer ?? "N/A"); ?></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <div class="card-body">N/A</div>
         <?php endif; ?>
      </div>
   
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/show/fields/materials.blade.php ENDPATH**/ ?>