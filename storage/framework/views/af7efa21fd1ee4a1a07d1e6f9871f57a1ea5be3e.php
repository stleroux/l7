<div class="card mb-2 card-trans-4">

   <div class="card-header bg-steel p-2">
      <i class="fas fa-fw fa-blog"></i>
      Popular Blog Posts
   </div>
   
   <div class="card-body bg-steel-light p-2">
      <?php if($popular->count() > 0): ?>
         <ul class="list-group px-0 py-0">
            <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <a class="list-group-item list-group-item-action p-1 card-trans-4" href="<?php echo e(route('blog.show', $p->slug)); ?>" role="button" style="text-decoration: none">
                  <div class="text text-left">
                     <i class="fas fa-fw fa-blog"></i>
                     <?php echo e($p->title); ?>

                     <span class="badge badge-danger float-right"><?php echo e($p->views); ?></span>
                  </div>
               </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
       <?php else: ?>
         <?php echo e(config('settings.noRecordsFound')); ?>

      <?php endif; ?>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/blog/blocks/popular.blade.php ENDPATH**/ ?>