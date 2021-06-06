<table class="table table-hover table-striped">
   <tbody>
      <tr>
         <th class="p-2">Category</th>
         <td class="p-2"><?php echo e($project->category); ?></td>
      </tr>
      <tr>
         <th class="p-2">Shop Time</th>
         <td class="p-2"><?php echo e($project->time_invested ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Price</th>
         <td class="p-2"><?php echo e(($project->price ? '$ ' . $project->price . '.00' : 'N/A')); ?></td>
      </tr>
      <tr>
         <th class="p-2">Frontend Views</th>
         <td class="p-2"><?php echo e($project->views ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Width <small>(inches)</small></th>
         <td class="p-2"><?php echo e($project->width ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Depth <small>(inches)</small></th>
         <td class="p-2"><?php echo e($project->depth ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Height <small>(inches)</small></th>
         <td class="p-2"><?php echo e($project->height ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Weight <small>(pounds)</small></th>
         <td class="p-2"><?php echo e($project->weight ?? "N/A"); ?></td>
      </tr>
      <tr>
         <th class="p-2">Completion Date</th>
         <td class="p-2"><?php echo e(($project->completed_at ? $project->completed_at->format('M d, Y') : "In Progress")); ?></td>
      </tr>
   </tbody>
</table>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/show/fields/information.blade.php ENDPATH**/ ?>