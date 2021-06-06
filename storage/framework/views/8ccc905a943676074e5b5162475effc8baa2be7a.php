<div class="col-sm-4">
   <div class="card mb-2 card-trans-4">
      <div class="card-header p-2 text-light"><?php echo e($player->first_name); ?></div>
      <div class="card-body p-2 card-trans-4">
         <table class="table table-sm table-hover">
            <thead>
               <tr>
                  <th>No</th>
                  <th class="text-center">Score</th>
                  <th class="text-center">Remaining</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $t1no = zeroOnePlayerScore($game->id, $player->user_id)->count();
               ?>
               
               <?php $__currentLoopData = zeroOnePlayerScore($game->id, $player->user_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td><?php echo e($t1no); ?></td>
                     <td class="text-center"><?php echo e($score->score); ?></td>
                     <td class="text-center"><?php echo e($score->remaining); ?></td>
                  </tr>
                  <?php
                     $t1no --;
                  ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/players/scoresheet.blade.php ENDPATH**/ ?>