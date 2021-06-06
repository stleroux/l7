<div class="card mb-2 card-trans-4 bg-info">
   
   <div class="card-header p-2">
      <i class="<?php echo e(config('icons.projects')); ?>"></i>
      Popular Projects
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">

      <?php if($popular->count() > 0): ?>
      
         <ul class="list-group">

            <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <a href="<?php echo e(route('projects.show', $p->id)); ?>" class="card-trans-2 list-group-item list-group-item-action p-1 <?php echo e((route('projects.show', $p->id) === url()->current()) ? 'projectActive' : ''); ?>">

                  <div class="text text-left">
                     <i class="<?php echo e(config('icons.projects')); ?>"></i>
                     <?php echo e(ucwords($p->name)); ?>


                     <span class="badge badge-info float-right"><?php echo e($p->views); ?></span>

                  </div>

               </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </ul>
      
      <?php else: ?>
      
         <div class="col-row p-2 card-trans-4 text-dark">
            <?php echo e(config('settings.noRecordsFound')); ?>

         </div>
      
      <?php endif; ?>
   
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/blocks/popular.blade.php ENDPATH**/ ?>