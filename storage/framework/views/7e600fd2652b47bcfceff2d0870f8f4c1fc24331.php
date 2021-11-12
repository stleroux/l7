

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   BASEBALL - <?php if($players->count() > 1): ?> Multi <?php else: ?> Individual <?php endif; ?> Player Game
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Baseball</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   <?php echo $__env->make('UI.darts.baseball.players.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="card mb-2 card-trans-4">

         <div class="card-body card_body p-2 card-trans-2">
            <table class="table table-sm table-striped table-hover">
               <thead align="center" class="bg-dark">
                  <tr>
                     <td class="bg-default"></td>
                     <th class="bg-dark" colspan="9"><h2>Innings</h2></th>
                     <td class="bg-default"></td>
                  </tr>
                  <tr>
                     <th class="h2 bg-dark">Player</th>
                     <?php $__currentLoopData = $innings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th class="h2 bg-dark">
                           <?php echo e($inning); ?>

                        </th>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <th class="h1 bg-dark">Total</th>
                  </tr>
               </thead>
               <tbody class="align-center">
                  <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr class="">
                        <td class="h2 align-middle"><?php echo e($players->get($loop->index)->first_name); ?></td>
                        <?php $__currentLoopData = $innings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <td class="p-1">
                              <div class="form-group_<?php echo e($p->id); ?> input-group p-1 h4">
                                 <select class="custom-select custom-select-lg py-0 prc" id="" name="p<?php echo e($p->id); ?>[]">
                                    <option class="" value=""></option>
                                    <option class="" value="0">0</option>
                                    <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option class="" value="<?php echo e($score); ?>"><?php echo e($score); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                           </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td>
                           <div class="h1 text text-center font-weight-bold pt-2">
                              <output id="result_<?php echo e($p->id); ?>"></output>
                           </div>
                        </td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>

         </div>

         <div class="card-footer p-1">
            At the moment, it is not possible to save the game in the system
            <span class="bg-danger float-right px-2">Make sure you delete the game from the main list when you are done.</span>
         </div>

      </div>

   
   <?php echo $__env->make('UI.darts.baseball.help.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script>
      <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      $('.form-group_<?php echo e($p->id); ?>').on('input','.prc', function(){
         var totalSum = 0;
         $('.form-group_<?php echo e($p->id); ?> .prc').each(function(){
            var inputVal = $(this).val();
            if($.isNumeric(inputVal)){
               totalSum += parseFloat(inputVal);
            }
         });
         $('#result_<?php echo e($p->id); ?>').html(totalSum);
      });
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/baseball/players/index.blade.php ENDPATH**/ ?>