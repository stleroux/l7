<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         <i class="<?php echo e(config('icons.materials')); ?>"></i>
         Material(s) Used In This Project
      </div>
   </div>

   <?php if($project->materials->count() > 0): ?>
      <table class="table table-sm table-hover table-striped mb-0">
         <thead>
            <tr class="text-dark">
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
      <div class="card-body p-1">N/A</div>
   <?php endif; ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/show/materials.blade.php ENDPATH**/ ?>