
      <div class="card card-primary">
         <div class="card-header p-2">
            
               Finish(es) Used In This Carving
            
         </div>
         <?php if($carving->finishes->count() > 0): ?>
            <table class="table table-hover table-striped mb-0">
               <thead>
                  <tr>
                     <th class="m-0 p-2">Name</th>
                     <th class="m-0 p-2">Type</th>
                     <th class="m-0 p-2">Color</th>
                     <th class="m-0 p-2">Manufacturer</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $carving->finishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td class="m-0 p-2"><?php echo e($f->name); ?></td>
                        <td class="m-0 p-2"><?php echo e($f->type); ?></td>
                        <td class="m-0 p-2"><?php echo e($f->color_name); ?></td>
                        <td class="m-0 p-2"><?php echo e($f->manufacturer); ?></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         <?php else: ?>
            <div class="card-body m-2 p-0">N/A</div>
         <?php endif; ?>
      </div>
   
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/show/fields/finishes.blade.php ENDPATH**/ ?>