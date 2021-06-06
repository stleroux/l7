<div class="card mb-2 card-trans-4">
   <div class="card-header p-2 text-light">
      Game Info
      <div class="float-right">
         N<sup>o</sup> : <?php echo e($game->id); ?>

      </div>
   </div>
   <div class="card-body p-2 card-trans-2">
      <div class="form-row">
         <div class="col-4">
            <div class="card mb-2 card-trans-2">
               <div class="card-header text-center p-2">Type</div>
               <div class="card-body text-center p-2">
                  <?php echo e($game->type); ?>

               </div>
            </div>
         </div>
      
         <?php if($gameDone): ?>
            <div class="col">
               <div class="card mb-2 border border-success">
                  <div class="card-header text-center p-2 bg-success text-dark">Winner</div>
                  <div class="card-body text-center p-2">
                     <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($game->type - zeroOnePlayerScore($game->id, $player->user_id)->sum('score') == 0): ?>
                           <?php echo e($player->first_name); ?>

                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/players/gameInfo.blade.php ENDPATH**/ ?>