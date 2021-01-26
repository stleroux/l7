<div class="card mb-3 p-0 m-0">

   <div class="card-header block_header p-2 m-0">Darts Menu</div>

   <div class="list-group">

      <a href="<?php echo e(route('darts.index')); ?>" class="list-group-item list-group-item-action p-1 <?php echo e(Route::is('darts.index') ? 'active' : ''); ?>">
         <i class="fa fa-bullseye"></i>
         Leader Board
      </a>

      
         <a href="<?php echo e(route('darts.game.create')); ?>"
            class="list-group-item list-group-item-action p-1
            <?php echo e(Route::is('darts.games.create') ? 'active' : ''); ?>

            <?php echo e(Route::is('darts.games.selectTeamsOrPlayers') ? 'active' : ''); ?>

            <?php echo e(Route::is('darts.games.selectPlayers') ? 'active' : ''); ?>

         ">
            <i class="fa fa-gamepad"></i>
            New Game
         </a>
      

      
         <a href="<?php echo e(route('darts.games.board')); ?>" class="list-group-item list-group-item-action p-1 <?php echo e(Route::is('darts.games.board') ? 'active' : ''); ?>">
            <i class="fa fa-industry"></i>
            Games Board
         </a>
      

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/blocks/sidebar.blade.php ENDPATH**/ ?>