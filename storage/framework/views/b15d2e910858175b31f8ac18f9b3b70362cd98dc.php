<div class="card mb-2 card-trans-4">

	<div class="card-header p-2 text-light">
		Game Info
		<div class="float-right">
      	N<sup>o</sup> : <?php echo e($game->id); ?>

   	</div>
	</div>

	<div class="card-body p-2 card-trans-2">
		<div class="form-row">
			<div class="col-4">
				<div class="card mb-2 card-trans-2">
					<div class="card-header text-center p-2">Team 1</div>
					<div class="card-body text-center p-2">
						<?php echo e($game->type - zeroOneTeamScores($game, 1)->sum('score')); ?>

					</div>
					<div class="card-footer p-1 text-center">
						<small>Score Remaining</small>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card mb-2 card-trans-2">
					<div class="card-header text-center p-2">Type</div>
					<div class="card-body text-center p-2"><?php echo e($game->type); ?></div>
				</div>
			</div>

			<div class="col-4">
				<div class="card mb-2 card-trans-2">
					<div class="card-header text-center p-2">Team 2</div>
					<div class="card-body text-center p-2">
						<?php echo e($game->type - zeroOneTeamScores($game, 2)->sum('score')); ?>

					</div>
					<div class="card-footer p-1 text-center">
						<small>Score Remaining</small>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<?php if($teamGameDone): ?>
            <div class="col">
               <div class="card mb-2 border border-success">
                  <div class="card-header text-center p-2 bg-success text-dark">Winner</div>
                  <div class="card-body text-center p-2">
                     <?php if($game->type - zeroOneTeamScores($game, 1)->sum('score') == 0 ): ?>
                     	Team 1
                     <?php else: ?>
                     	Team 2
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         <?php endif; ?>
		</div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/gameInfo.blade.php ENDPATH**/ ?>