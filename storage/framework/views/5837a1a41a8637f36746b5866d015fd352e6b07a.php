

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
	<style>
		.hover { background-color: grey; }
		.thead tr th { color: yellow; }

		td.rowcolSelected:hover{
			background-color: red;
			color: black;
			font-weight: bold;
		}
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   Game Scoreboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Game</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('rightColumn'); ?>
   <p>&nbsp;</p>
   <?php echo $__env->make('UI.darts.blocks.possibleOuts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.teams.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('UI.darts.01.teams.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="<?php echo e(route('darts.01.teams.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>

	   <?php if(isset($teamGameDone)): ?>
	      <?php if(!$teamGameDone): ?>
	         <?php echo $__env->make('UI.darts.01.inc.scoreboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	      <?php endif; ?>
	   <?php endif; ?>
		
		<div class="form-row">
			<div class="col-sm-4">
				<?php echo $__env->make('UI.darts.01.teams.t1playersPanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.darts.01.teams.t1scoresheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="col-sm-4">
	         <?php if(isset($teamGameDone)): ?>
	            <?php if(!$teamGameDone): ?>
	               <?php echo $__env->make('UI.darts.01.teams.scorePad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				      <?php echo $__env->make('UI.darts.01.inc.dartboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	            <?php endif; ?>
	         <?php endif; ?>
	         <?php echo $__env->make('UI.darts.01.teams.gameInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.darts.01.teams.teamStats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.darts.01.teams.playerStats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

			<div class="col-sm-4">
				<?php echo $__env->make('UI.darts.01.teams.t2playersPanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.darts.01.teams.t2scoresheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		$("#tbl").delegate('td','mouseover mouseleave', function(e) {
			if (e.type == 'mouseover') {
				$(this).parent().addClass("hover");
				$("colgroup").eq($(this).index()).addClass("hover");
			} else {
				$(this).parent().removeClass("hover");
				$("colgroup").eq($(this).index()).removeClass("hover");
			}
		});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(''.($teamGameDone == 0) ? 'layouts.UI.app-10-2' : 'layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/index.blade.php ENDPATH**/ ?>