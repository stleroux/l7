<div class="pb-1 pl-0">

      <?php if(Route::currentRouteName() != 'darts.index'): ?>
         <a href="<?php echo e(route('darts.index')); ?>" class="btn btn-primary p-1 <?php echo e(Route::is('darts') ? 'active' : ''); ?>">
            <i class="fa fa-bullseye"></i>
            Leader Board
         </a>
      <?php endif; ?>

      <?php if(Route::currentRouteName() != 'darts.games.board'): ?>
         <a href="<?php echo e(route('darts.games.board')); ?>"
            class="btn btn-primary p-1 <?php echo e(Route::is('darts.games.board') ? 'active' : ''); ?>">
            <i class="fa fa-industry"></i>
            Games Board
         </a>
      <?php endif; ?>


      
         
         <?php if(Route::currentRouteName() == 'darts.games.board' || Route::currentRouteName() == 'darts.index'): ?>
            <div class="float-right">
            <a href="<?php echo e(route('darts.game.create')); ?>"
               class="btn btn-primary p-1
               <?php echo e(Route::is('darts.games.create') ? 'active' : ''); ?>

               <?php echo e(Route::is('darts.games.selectTeamsOrPlayers') ? 'active' : ''); ?>

               <?php echo e(Route::is('darts.games.selectPlayers') ? 'active' : ''); ?>

            ">
               <i class="fa fa-gamepad"></i>
               New Game
            </a>
            </div>
         <?php endif; ?>
         
         <?php if(
            Route::currentRouteName() == 'darts.around.players' ||
            Route::currentRouteName() == 'darts.baseball.players' ||
            Route::currentRouteName() == 'darts.cricket.players' ||
            Route::currentRouteName() == 'darts.zeroOne.players'
         ): ?>
            <a href="<?php echo e(URL::previous()); ?>">Back</a>
      <?php endif; ?>


      <?php if(!Route::currentRouteName() == 'darts.index'): ?>
         <span class="float-right pr-2 pt-1">Game ID : <?php echo e($game->id); ?></span>
      <?php endif; ?>
</div>

<?php /**PATH C:\sites\l7\resources\views/UI/darts/blocks/topbar.blade.php ENDPATH**/ ?>