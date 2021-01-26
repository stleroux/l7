<div class="card mb-2 card-trans-4">
   <div class="card-header p-2 text-light">Players Statistics</div>

   <div class="card-body p-2 card-trans-2">
      <table class="table table-sm table-hover">
         <thead>
            <tr>
               <th>Player</th>
               <th>Remaining</th>
               <th class="text-center">Best Score</th>
               <th class="text-center">Score Avg</th>
               <th class="text-center">Dart Avg</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr class="text-center">
                  <td class="text-left"><?php echo e($player->first_name); ?></td>
                  <td><?php echo e($game->type - zeroOnePlayerScore($game->id, $player->user_id)->sum('score')); ?></td>
                  <td><?php echo e(zeroOnePlayerBestScore($player)); ?></td>
                  <td><?php echo e(zeroOnePlayerScoreAvg($player)); ?></td>
                  <td><?php echo e(zeroOnePlayerDartAvg($player)); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/players/playerStats.blade.php ENDPATH**/ ?>