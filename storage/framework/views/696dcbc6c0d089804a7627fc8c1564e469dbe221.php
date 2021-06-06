<div class="card mb-2 card-trans-4">

	<div class="card-header p-2 text-light">Team 2 Players</div>

	<div class="card-body p-2 card-trans-2">
		
      <?php $__currentLoopData = zeroOneTeamPlayers($game, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <?php if(!$teamGameDone): ?>
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

	</div>
	
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/t2playersPanel.blade.php ENDPATH**/ ?>