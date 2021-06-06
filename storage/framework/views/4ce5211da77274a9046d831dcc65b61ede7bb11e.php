<div class="card mb-2 card-trans-4">

	<div class="card-header p-2 text-light">Players Statistics</div>

	<div class="card-body p-2 card-trans-2">
		<table class="table table-sm table-hover">
			<thead>
				<tr>
					<th>Team</th>
					<th>Player</th>
					<th class="text-center">Best Score</th>
					<th class="text-center">Score Avg</th>
					<th class="text-center">Dart Avg</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = zeroOnePlayers($game->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="text-center">
						<td><?php echo e($player->team_id); ?></td>
						<td class="text-left"><?php echo e($player->first_name); ?></td>
						<td><?php echo e(zeroOnePlayerBestScore($player)); ?></td>
						<td><?php echo e(zeroOnePlayerScoreAvg($player)); ?></td>
						<td><?php echo e(zeroOnePlayerDartAvg($player)); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/playerStats.blade.php ENDPATH**/ ?>