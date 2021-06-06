

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   Create Game - Step : 3
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Create Game</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.darts.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   
   <form action="<?php echo e(route('darts.games.storePlayers')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      
      <input type="hidden" name="game_id" value="<?php echo e($game->id); ?>">
      
      <input type="hidden" name="players" value="<?php echo e($game->ind_players); ?>">

      <div class="card mb-2 card-trans-4">
         
         
         
         <div class="card-body section_body p-2">
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-2 card-trans-4">
                     <div class="card-header card_header p-2">Select The Player(s) For This Game</div>
                     <div class="card-body card_body p-2">
                        <?php for($i = 0; $i < $game->ind_players; $i++): ?>
                           <div class="col-sm-3">
                              <label class="form-label mb-0 pb-0">Player <?php echo e($i + 1); ?>:</label>
                           </div>
                           <div class="col-sm-6 mb-3">
                              <select name="players[]" class="form-control form-control-sm">
                                 <option value="">Select A Player</option>
                                 <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option name="player_<?php echo e($i); ?>" value="<?php echo e($user->id); ?>"><?php echo e($user->last_name); ?>, <?php echo e($user->first_name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </div>
                        <?php endfor; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="card-footer p-1">
            Fields marked with an<span class="required"></span> are required.
            <span class="float-right">
               
               <button type="submit" class="btn btn-sm btn-primary">Create Game</button>
            </span>
         </div>

      </div>

   </form>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/games/selectPlayers.blade.php ENDPATH**/ ?>