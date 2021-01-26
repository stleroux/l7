<table class="table table-hover table-striped">
   <tbody>
      <tr>
         <th>Category</th>
         <td><?php echo e($project->category); ?></td>
      </tr>
      <tr>
         <th>Shop Time</th>
         <td><?php echo e($project->time_invested ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th>Price</th>
         <td><?php echo e(($project->price ? '$ ' . $project->price . '.00' : 'N/A')); ?></td>
      </tr>
      <tr>
         <th>Frontend Views</th>
         <td><?php echo e($project->views ?? "N/A"); ?></td>
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
         <th>Completion Date</th>
         <td><?php echo e(($project->completed_at ? $project->completed_at->format('M d, Y') : "In Progress")); ?></td>
      </tr>
   </tbody>
</table>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/show/fields/information.blade.php ENDPATH**/ ?>