<div class="card mb-2 card-trans-4">
	<div class="card-header p-2 text-light">Team 1 Scoresheet</div>

	<div class="card-body p-2 card-trans-2">
		<table class="table table-sm table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th class="text-center">Player</th>
					<th class="text-center">Score</th>
					<th class="text-center">Remaining</th>
	            
				</tr>
			</thead>
			<tbody>
				<?php
					$t1no = zeroOneTeamScores($game, 1)->count();
				?>
				<?php $__currentLoopData = zeroOneTeamScores($game, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($t1no); ?></td>
						<td class="text-center"><?php echo e($score->first_name); ?></td>
						<td class="text-center"><?php echo e($score->score); ?></td>
						<td class="text-center"><?php echo e($score->remaining); ?></td>
	               
					</tr>
					<?php
						$t1no --;
					?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
	
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/t1scoresheet.blade.php ENDPATH**/ ?>