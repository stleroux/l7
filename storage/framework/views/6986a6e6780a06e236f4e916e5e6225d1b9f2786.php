<?php $__env->startSection('stylesheet'); ?>
      <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
      <style>
         td.item { cursor: pointer; background-color: red; }
         td.on { background-color: green; }
      </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
      CASTLE - 
      <?php if($players->count() > 1): ?> Multi <?php else: ?> Individual <?php endif; ?> 
      Player Game
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
      <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
      <li class="breadcrumb-item">Castle</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
dsadsad
   <?php echo $__env->make('UI.darts.castle.players.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card card-trans-4">

      <div class="card-body p-2">

         <div class="row">

            <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <div class="col-xl-3 mb-3">

                  <div class="card mb-0 card-trans-4">

                     <div class="card-header">
                        <div class="row">
                           <div class="col font-weight-bold h4"><?php echo e($player->first_name); ?></div>
                           <div class="col-5 text-right">
                              <select name="" class="form-control card-trans-4">
                                 <?php for($i = 0; $i < 21; $i++): ?>
                                    <option value="<?php echo e($i); ?>" class=""><?php echo e($i); ?></option>
                                 <?php endfor; ?>
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="card-body card-trans-4">

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="40%" class=""></td>
                              <td width="20%" class="item border">15</td>
                              <td width="40%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td class="30%"></td>
                              <td width="20%" class="item border">13</td>
                              <td width="20%" class="item border">14</td>
                              <td width="30%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="20%" class=""></td>
                              <td width="20%" class="item border">10</td>
                              <td width="20%" class="item border">11</td>    
                              <td width="20%" class="item border">12</td>
                              <td width="20%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="10%"></td>
                              <td width="20%" class="item border">6</td>
                              <td width="20%" class="item border">7</td>
                              <td width="20%" class="item border">8</td>    
                              <td width="20%" class="item border">9</td>
                              <td width="10%"></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="20%" class="item border">1</td>    
                              <td width="20%" class="item border">2</td>    
                              <td width="20%" class="item border">3</td>    
                              <td width="20%" class="item border">4</td>    
                              <td width="20%" class="item border">5</td>
                           </tr>
                        </table>

                     </div>

                  </div>

               </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </div>

      </div>

      <div class="card-footer p-1">
         At the moment, it is not possible to save the game in the system
         <span class="bg-danger float-right px-2">Make sure you delete the game from the main list when you are done.</span>
      </div>

   </div>

   <?php echo $__env->make('UI.darts.castle.players.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script>
      $( function() {
         $('td.item').click( function() {
            $(this).toggleClass('on');
         } )
      });
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/castle/players/index.blade.php ENDPATH**/ ?>