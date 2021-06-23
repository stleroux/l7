<div class="card card-outline card-primary">

   <div class="card-header bg-info">
      <div class="card-title font-weight-bold">
         <i class="<?php echo e(config('icons.info')); ?>"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-hover table-striped text-dark">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td><?php echo e($project->category); ?></td>
            </tr>
            <tr>
               <th>Frontend Views</th>
               <td>
                  
                  <?php echo e(views($project)->count()); ?>

               </td>
            </tr>
            <tr>
               <th>Views Last Month</th>
               <td>
                  <?php echo e(views($project)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count()); ?>

               </td>
            </tr>
            <tr>
               <th>Width <small>(inches)</small></th>
               <td><?php echo e($project->width ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Depth <small>(inches)</small></th>
               <td><?php echo e($project->depth ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Height <small>(inches)</small></th>
               <td><?php echo e($project->height ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Weight <small>(pounds)</small></th>
               <td><?php echo e($project->weight ?? "N/A"); ?></td>
            </tr>

            <tr>
               <th>Price</th>
                  <?php if(auth()->guard()->check()): ?>
                     <td><?php echo e(($project->price ? '$ ' . $project->price . '.00' : 'N/A')); ?></td>
                  <?php else: ?>
                     <td>Login for details</td>
                  <?php endif; ?>
            </tr>
            <tr>
               <th>Likes</th>
               <td><?php echo e($project->likes()->count()); ?></td>
            </tr>
         </tbody>
      </table>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/show/information.blade.php ENDPATH**/ ?>