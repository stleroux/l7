
      <div class="card card-primary">
         <div class="card-header p-2">
            
               Material(s) Used In This Carving
            
         </div>
         <?php if($carving->materials->count() > 0): ?>
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th class="m-2 p-0">Name</th>
                     <th class="m-2 p-0">Type</th>
                     <th class="m-2 p-0">Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $carving->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td class="m-2 p-0"><?php echo e($m->name); ?></td>
                        <td class="m-2 p-0"><?php echo e($m->type ?? "N/A"); ?></td>
                        <td class="m-2 p-0"><?php echo e($m->manufacturer ?? "N/A"); ?></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <div class="card-body m-0 p-2">N/A</div>
         <?php endif; ?>
      </div>
   
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/show/fields/materials.blade.php ENDPATH**/ ?>