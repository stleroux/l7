<div class="card mb-2 card-trans-4">

   <div class="card-header card_header p-2">Cricket Individual Stats</div>
   
   <div class="card-body p-0 m-0">
      <table class="darts table table-sm table-hover">
         <thead>
            <tr>
               <th>Player Name</th>
               <th class="text-center">Played</th>
               <th class="text-center">Won</th>
               <th class="text-center">Lost</th>
               <th class="text-center">Practice</th>
               <th class="text-center">Win%</th>                           
               <th class="text-center">Best Score</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($player->first_name); ?></td>
                  <td class="text-center"><?php echo e(cricketPlayerIndividualGamesPlayedStat($player)); ?></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
   
</div>
               <?php /**PATH C:\sites\l7\resources\views/UI/darts/statistics/cricketIndividuals.blade.php ENDPATH**/ ?>