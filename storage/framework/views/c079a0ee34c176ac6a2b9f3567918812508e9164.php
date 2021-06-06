

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   Create Game - Step : 2
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


<form action="<?php echo e(route('darts.games.storeTeamsOrPlayers')); ?>" method="POST">
   
   <?php echo csrf_field(); ?>
   <input type="hidden" name="game_id" value="<?php echo e($game->id); ?>">

   <div class="card mb-2 card-trans-2">
      
      <div class="card-body section_body p-2">

         <?php if(!in_array($game->type, $gameTypes)): ?>

            <?php if(!in_array($game->type, $gameTypes)): ?>
               <div class="row col">
            <?php endif; ?>

            
            <div <?php if(!in_array($game->type, $gameTypes)): ?> class="col-5" <?php endif; ?>>
               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-2">N<sup>o</sup> Of Player(s) Per Team</div>
                  <div class="card-body card_body pb-2">
                     <div class="form-group <?php echo e($errors->has('t_players') ? 'has-error' : ''); ?>">
                        <select name="t_players" class="form-control form-control-sm">
                           <option value="">Select...</option>
                           <option value="2">2 players per team = 4 players total</option>
                           <option value="3">3 players per team = 6 players total</option>
                           <option value="4">4 players per team = 8 players total</option>
                           <option value="5">5 players per team = 10 players total</option>
                        </select>
                        
                        <span class="text-danger"><?php echo e($errors->first('t_players')); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         
            
            <div <?php if(!in_array($game->type, $gameTypes)): ?> class="col-2" <?php endif; ?>>
               <div class="card mt-4 mb-2 card-trans-4">
                  <div class="card-body card_body p-2">
                     <div class="text text-center"><h1>OR</h1></div>
                  </div>
               </div>
            </div>

         <?php endif; ?>

            
         <div <?php if(!in_array($game->type, $gameTypes)): ?> class="col-5" <?php endif; ?>>

            
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-2">N<sup>o</sup> Of Individual Player(s)</div>
               <div class="card-body card_body pb-2">
                  <div <?php if(in_array($game->type, $gameTypes)): ?> class="col-3" <?php endif; ?>>
                     <div class="form-group <?php echo e($errors->has('ind_players') ? 'has-error' : ''); ?>">
                        <select name="ind_players" class="form-control form-control-sm">
                           <option value="">Select...</option>
                           <option value="1">1 player (Practice Mode)</option>
                           <option value="2">2 players</option>
                           <option value="3">3 players</option>
                           <option value="4">4 players</option>
                           <option value="5">5 players</option>
                           <option value="6">6 players</option>
                           <option value="7">7 players</option>
                           <option value="8">8 players</option>
                           <option value="9">9 players</option>
                           <option value="10">10 players</option>
                        </select>
                        
                        <span class="text-danger"><?php echo e($errors->first('ind_players')); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <?php if(!in_array($game->type, $gameTypes)): ?>
            </div>
         <?php endif; ?>

      </div>

      <div class="card-footer p-1">
         <span class="float-right">
            
            <button type="submit" class="btn btn-sm btn-primary">Next Step</button>
         </span>
      </div>

   </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/games/selectTeamsOrPlayers.blade.php ENDPATH**/ ?>