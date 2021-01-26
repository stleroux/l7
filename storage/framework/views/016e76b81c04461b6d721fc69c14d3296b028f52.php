<div class="row mb-2">

	<div class="col">

	   <a href="<?php echo e(route('darts.index')); ?>" class="btn btn-primary p-1 <?php echo e(Route::is('darts') ? 'active' : ''); ?>">
	      <i class="fa fa-bullseye"></i>
	      Leader Board
	   </a>

	   <a href="<?php echo e(route('darts.games.board')); ?>"
	      class="btn btn-primary p-1 <?php echo e(Route::is('darts.games.board') ? 'active' : ''); ?>">
	      <i class="fa fa-industry"></i>
	      Games Board
	   </a>

	</div>

   <div class="col text-right">

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="<?php echo e(config('icons.help')); ?>"></i>
         Help
      </a>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/players/topbar.blade.php ENDPATH**/ ?>