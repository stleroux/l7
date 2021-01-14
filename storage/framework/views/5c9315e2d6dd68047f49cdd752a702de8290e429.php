<div class="card mb-2 card-trans-4" style="background-color: #800000">
   
   <div class="card-header text-light p-2">
      <i class="<?php echo e(config('icons.recipes')); ?>"></i>
      Popular Recipes
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">
      
      <?php if($popular->count() > 0): ?>

         <ul class="list-group">
            
            <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <a href="<?php echo e(route('recipes.show', $r->id)); ?>" 
                  class="card-trans-2 list-group-item list-group-item-action p-1 <?php echo e((route('recipes.show', $r->id) === url()->current()) ? 'recipeActive' : ''); ?>">
               
                  <div class="text text-left">
               
                     <i class="<?php echo e(config('icons.recipes')); ?>"></i>
                     <?php echo e($r->title); ?>

               
                     <span class="badge badge-maroon float-right"><?php echo e($r->views); ?></span>
                  
                  </div>

               </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </ul>

      <?php else: ?>

         <div class="col-row p-2 card-trans-4">
            <?php echo e(config('settings.noRecordsFound')); ?>

         </div>

      <?php endif; ?>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/blocks/popular.blade.php ENDPATH**/ ?>