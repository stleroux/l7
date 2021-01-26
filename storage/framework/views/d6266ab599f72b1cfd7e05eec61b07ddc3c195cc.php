<!-- TAGS -->

<div class="card card-outline card-primary">
   <div class="card-header">
      <div class="card-title">Tags</div>
   </div>
   <?php if($project->tags->count() > 0): ?>
      <div class="card-body">
         <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="lead">
               <span class="badge badge-secondary">
                  <?php echo e($t->name); ?>                     
               </span>
            </span>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
      </div>            
   <?php else: ?>
      <div class="card-body">N/A</div>
   <?php endif; ?>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/show/fields/tags.blade.php ENDPATH**/ ?>