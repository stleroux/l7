<div class="card card-primary">
   <div class="card-header">
      <div class="card-title">Information</div>
   </div>
   <div class="card-body p-0">

      <table class="table table-hover table-striped">
         <tbody>
            <tr>
               <th>Category</th>
               <td><?php echo e($carving->category); ?></td>
            </tr>
            <tr>
               <th>Design Time</th>
               <td>
                  <?php if($carving->design_time_hrs && $carving->design_time_mins): ?>
                     <?php echo e($carving->design_time_hrs > 1 ? $carving->design_time_hrs . ' hrs' : $carving->design_time_hrs .' hr'); ?>

                     <?php echo e($carving->design_time_mins > 1 ? $carving->design_time_mins . ' mins' : $carving->design_time_mins .' min'); ?>

                  <?php else: ?>
                     N/A
                  <?php endif; ?>
               </td>
            </tr>
            <tr>
               <th>Machine Time</th>
               <td>
                  <?php if($carving->machine_time_hrs && $carving->machine_time_mins): ?>
                     <?php echo e($carving->machine_time_hrs > 1 ? $carving->machine_time_hrs . ' hrs' : $carving->machine_time_hrs .' hr'); ?>

                     <?php echo e($carving->machine_time_mins > 1 ? $carving->machine_time_mins . ' mins' : $carving->machine_time_mins .' min'); ?>

                  <?php else: ?>
                     N/A
                  <?php endif; ?>
               </td>
            </tr>
            <tr>
               <th>Price</th>
               <td><?php echo e(($carving->price ? '$ ' . $carving->price . '.00' : 'N/A')); ?></td>
            </tr>
            <tr>
               <th>Views</th>
               <td><?php echo e($carving->views ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Width (X)</th>
               <td><?php echo e($carving->width ?? "N/A"); ?>

                  <?php if($carving->width): ?>
                     <small>inche(s)</small>
                  <?php endif; ?>
               </td>
            </tr>
            <tr>
               <th>Height (Y)</th>
               <td><?php echo e($carving->height ?? "N/A"); ?>

                  <?php if($carving->height): ?>
                     <small>inche(s)</small>
                  <?php endif; ?>
               </td>
            </tr>
            <tr>
               <th>Depth (Z)</th>
               <td><?php echo e($carving->depth ?? "N/A"); ?>

                  <?php if($carving->depth): ?>
                     <small>inche(s)</small>
                  <?php endif; ?>
               </td>
            </tr>

            <tr>
               <th>Weight</th>
               <td><?php echo e($carving->weight ?? "N/A"); ?>

                  <?php if($carving->weight): ?>
                     <small>(pounds)</small>
                  <?php endif; ?>
               </td>
            </tr>
            <tr>
               <th>Completion Date</th>
               <td><?php echo e(($carving->completed_at ? $carving->completed_at->format('M d, Y') : "In Progress")); ?></td>
            </tr>
         </tbody>
      </table>

   </div>
</div>


<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/show/fields/information.blade.php ENDPATH**/ ?>