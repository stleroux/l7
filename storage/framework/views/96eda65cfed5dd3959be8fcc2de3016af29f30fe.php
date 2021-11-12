<div class="row-col mb-2 text text-right">

	

	   <a href="<?php echo e(route('darts.index')); ?>" class="btn btn-primary p-1 <?php echo e(Route::is('darts') ? 'active' : ''); ?>">
	      <i class="fa fa-bullseye"></i>
	      Leader Board
	   </a>

	   <a href="<?php echo e(route('darts.games.board')); ?>"
	      class="btn btn-primary p-1 <?php echo e(Route::is('darts.games.board') ? 'active' : ''); ?>">
	      <i class="fa fa-industry"></i>
	      Games Board
	   </a>

	

   

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="<?php echo e(config('icons.help')); ?>"></i>
         Help
      </a>

   

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/baseball/players/topbar.blade.php ENDPATH**/ ?>