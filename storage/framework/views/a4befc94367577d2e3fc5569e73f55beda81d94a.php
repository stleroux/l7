<div class="card card-trans-4">
   
   <div class="card-header card_header p-2">01 Team Stats</div>
   
   <div class="card-body p-0 m-0">
      <table class="table table-sm table-hover">
         <thead>
            <tr>
               <th>Player Name</th>
               <th class="text-center">Played</th>
               <th class="text-center">Won</th>
               <th class="text-center">Lost</th>
               <th class="text-center">Closed</th>
               <th class="text-center">Best Score</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($player->first_name); ?></td>
                  <td class="text-center"><?php echo e(zeroOneTeamGamesPlayedStat($player)); ?></td>
                  <td class="text-center"><?php echo e(zeroOneTeamGamesWonStat($player)); ?></td>
                  <td class="text-center"><?php echo e(zeroOneTeamGamesLostStat($player)); ?></td>
                  <td class="text-center"><?php echo e(zeroOneTeamGamesClosedStat($player)); ?></td>
                  <td class="text-center"><?php echo e(zeroOneTeamBestScoreStat($player)); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/statistics/zeroOneTeams.blade.php ENDPATH**/ ?>