

<form action="<?php echo e(route('darts.01.players.store')); ?>" method="POST">
   <?php echo csrf_field(); ?>
   
   <input type="hidden" name="game_id" value="<?php echo e($game->id); ?>">
   
   <input type="hidden" name="game_type" value="<?php echo e($game->type); ?>">
   <input type="hidden" name="remainingScore" value="<?php echo e($remainingScore); ?>" />

   <div class="card mb-2 card-trans-4">
   
      <div class="card-header p-2 text-light">
         <?php if(!$gameDone): ?>
            Enter Selected Player's Score
         <?php else: ?>
            Players
         <?php endif; ?>
      </div>

      <div class="card-body p-2 card-trans-2">

         <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(!$gameDone): ?>
               <?php if($player->shooting_order == $nextShot): ?>
                  <label class="bg-primary border btn-block p-2 m-0">
                     
                     <input type="radio" name="user_id" value="<?php echo e($player->user_id); ?>" checked />
                     <?php echo e($player->first_name); ?> <?php echo e($player->last_name); ?>

                  </label>
               <?php else: ?>
                  <label class="bg-default btn-block p-2 m-0">
                     
                     <input type="radio" name="user_id" value="<?php echo e($player->user_id); ?>" disabled />
                     <?php echo e($player->first_name); ?> <?php echo e($player->last_name); ?>

                  </label>
               <?php endif; ?>
            <?php else: ?>
               <label class="bg-default btn-block p-2 m-0">
                  
                  <input type="radio" name="user_id" value="<?php echo e($player->user_id); ?>" disabled />
                  <?php echo e($player->first_name); ?> <?php echo e($player->last_name); ?>

               </label>
            <?php endif; ?>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         <?php if(!$gameDone): ?>
            <div class="container pt-2">
               <div class="row justify-content-center">
                  <div class="input-group col-sm-6">
                     <input class="form-control form-control-lg" type="text" id="score" name="score" autocomplete="off" style="text-align: center" />
                     <div class="input-group-append">
                        <button class="btn btn-success btn-lg" type="submit">Go!</button>
                     </div>
                  </div>
               </div>
            </div>
         <?php endif; ?>

      </div>

      <?php if(!$gameDone): ?>
         <div class="card-footer p-1">
            
               <div class="p-0">
                  Click Go! or Press Enter to submit
               </div>

         </div>
      <?php endif; ?>

   </div>

</form>


<?php $__env->startSection('scripts'); ?>


   <script type="text/javascript">
      $(document).ready(function(){
         $("#score").focus();
      });
   </script>


   <?php echo $__env->make('UI.darts.01.inc.messages.error.impossibility', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.invalid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.noScore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.problem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.tooHigh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('UI.darts.01.inc.messages.success.0-20', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.21-60', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.61-120', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.121-179', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.perfect', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/players/scorePanel.blade.php ENDPATH**/ ?>