<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   Games Board
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Games</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.darts.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   <?php echo $__env->make('UI.darts.blocks.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card mb-2 card-trans-6">
		
		

		<div class="card-body section_body p-2">
			<?php if($games->count() > 0): ?>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>Game N<sup>o</sup></th>
							<th>Type</th>
							<th class="d-none d-lg-table-cell">Team 1 Players</th>
							<th class="d-none d-lg-table-cell">Team 2 Players</th>
							<th class="d-none d-lg-table-cell">Players</th>
							<th class="">Date</th>
							<th class="d-none d-md-table-cell">Winner</th>
							<th class="d-none d-sm-table-cell">Status</th>
							<th nowrap="nowrap"></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
                        <!-- Gamwe ID -->
								<td><?php echo e($game->id); ?></td>
                        <!-- Game Type -->
								<td><?php echo e(ucfirst($game->type)); ?></td>
                        <!-- Team 1 Players -->
								<td class="d-none d-lg-table-cell">
									<?php $__currentLoopData = zeroOneTeamPlayers($game, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php echo e($player->first_name); ?>

										<?php if(!$loop->last): ?>
											&nbsp;/&nbsp;
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</td>
                        <!-- Team 2 Players -->
								<td class="d-none d-lg-table-cell">
									<?php $__currentLoopData = zeroOneTeamPlayers($game, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php echo e($player->first_name); ?>

										<?php if(!$loop->last): ?>
											&nbsp;/&nbsp;
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</td>
                        <!-- Players -->
								<td class="d-none d-lg-table-cell">
									<?php if($game->ind_players): ?>
										<?php $__currentLoopData = zeroOnePlayers($game->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php echo e($player->first_name); ?>

											<?php if(!$loop->last): ?>
												&nbsp;/&nbsp;
											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
								</td>
                        <!-- Date -->
								<td class=""><?php echo e($game->created_at->format('M d, Y')); ?></td>
								<!-- Winner -->
                        <td class="d-none d-md-table-cell">
									<?php if($game->type == '301' || $game->type == '501' || $game->type == '701' || $game->type == '1001'): ?>
										<?php echo e(zeroOneGameWinner($game)); ?>

									<?php elseif($game->type == 'cricket'): ?>
										<?php echo e(cricketGameWinner($game)); ?>

									<?php endif; ?>
								</td>
                        <!-- Status -->
								<td class="d-none d-sm-table-cell"><?php echo e($game->status); ?></td>
                        <!-- Options -->
								<td  nowrap="nowrap" class="text-right">
									<form action="<?php echo e(route('darts.games.destroy', $game->id)); ?>" method="POST">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>

										<?php if($game->type == 'cricket'): ?>
											<div class="btn-group" role="group">
											
												<?php if($game->ind_players): ?>
													<?php if($game->status == 'New'): ?>
														<a href="<?php echo e(route('darts.cricket.players.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
													<?php elseif($game->status == 'In Progress'): ?>
														<a href="<?php echo e(route('darts.cricket.players.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
													<?php elseif($game->status == 'Completed'): ?>
														<a href="<?php echo e(route('darts.cricket.players.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
													<?php else: ?>
														N/A
													<?php endif; ?>
												<?php else: ?>
												
													<?php if($game->status == 'New'): ?>
														<a href="<?php echo e(route('darts.cricket.teams.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
													<?php elseif($game->status == 'In Progress'): ?>
														<a href="<?php echo e(route('darts.cricket.teams.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
													<?php elseif($game->status == 'Completed'): ?>
														<a href="<?php echo e(route('darts.cricket.teams.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
													<?php else: ?>
														N/A
													<?php endif; ?>
												<?php endif; ?>
											</div>
	                           <?php elseif($game->type == 'baseball'): ?>
	                           	<div class="btn-group" role="group">
		                              
		                              <?php if($game->ind_players): ?>
		                                 <?php if($game->status == 'New'): ?>
		                                    <a href="<?php echo e(route('darts.baseball.players.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
		                                 <?php elseif($game->status == 'In Progress'): ?>
		                                    <a href="<?php echo e(route('darts.baseball.players.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
		                                 <?php elseif($game->status == 'Completed'): ?>
		                                    <a href="<?php echo e(route('darts.baseball.players.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
		                                 <?php else: ?>
		                                    N/A
		                                 <?php endif; ?>
		                              <?php else: ?>
		                              
		                                 
		                              <?php endif; ?>
		                           </div>
	                           <?php elseif($game->type == 'around'): ?>
	                           	<div class="btn-group" role="group">
		                              
		                              <?php if($game->ind_players): ?>
		                                 <?php if($game->status == 'New'): ?>
		                                    <a href="<?php echo e(route('darts.around.players.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
		                                 <?php elseif($game->status == 'In Progress'): ?>
		                                    <a href="<?php echo e(route('darts.around.players.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
		                                 <?php elseif($game->status == 'Completed'): ?>
		                                    <a href="<?php echo e(route('darts.around.players.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
		                                 <?php else: ?>
		                                    N/A
		                                 <?php endif; ?>
		                              <?php else: ?>
		                              
		                                 
		                              <?php endif; ?>
		                           </div>
		                        <?php elseif($game->type == 'castle'): ?>
	                           	<div class="btn-group" role="group">
		                              
		                              <?php if($game->ind_players): ?>
		                                 <?php if($game->status == 'New'): ?>
		                                    <a href="<?php echo e(route('darts.castle.players.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
		                                 <?php elseif($game->status == 'In Progress'): ?>
		                                    <a href="<?php echo e(route('darts.castle.players.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
		                                 <?php elseif($game->status == 'Completed'): ?>
		                                    <a href="<?php echo e(route('darts.castle.players.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
		                                 <?php else: ?>
		                                    N/A
		                                 <?php endif; ?>
		                              <?php else: ?>
		                              
		                                 
		                              <?php endif; ?>
		                           </div>
										<?php else: ?>
											<div class="btn-group" role="group">
												
												<?php if($game->ind_players): ?>
													<div class="btn-group" role="group">
		   											<?php if($game->status == 'New'): ?>
		   												<a href="<?php echo e(route('darts.01.players.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
		   											<?php elseif($game->status == 'In Progress'): ?>
		   												<a href="<?php echo e(route('darts.01.players.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
		   											<?php elseif($game->status == 'Completed'): ?>
		   												<a href="<?php echo e(route('darts.01.players.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
		   											<?php else: ?>
		   												N/A
		   											<?php endif; ?>
													</div>
												<?php else: ?>
		   										
		   										<div class="btn-group" role="group">
		   											<?php if($game->status == 'New'): ?>
		   												<a href="<?php echo e(route('darts.01.teams.index', $game->id)); ?>" class="btn btn-sm btn-success">Start</a>
		   											<?php elseif($game->status == 'In Progress'): ?>
		   												<a href="<?php echo e(route('darts.01.teams.index', $game->id)); ?>" class="btn btn-sm btn-warning">Resume</a>
		   											<?php elseif($game->status == 'Completed'): ?>
		   												<a href="<?php echo e(route('darts.01.teams.index', $game->id)); ?>" class="btn btn-sm btn-primary">Results</a>
		   											<?php else: ?>
		   												N/A
		   											<?php endif; ?>
		   									   </div>
											   <?php endif; ?>
											</div>
										<?php endif; ?>

										<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dart-delete')): ?>
											<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this game and all related entries?');">Delete</button>
										<?php endif; ?>
									</form>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>


			<?php else: ?>
				<?php echo e(config('settings.noRecordsFound')); ?>

			<?php endif; ?>
		</div>
		
		
		<div class="row d-flex">
			<div class="col ml-2">
				Showing records <?php echo e($games->firstItem()); ?> to <?php echo e($games->lastItem()); ?> of <?php echo e($games->total()); ?>

			</div>
			<div class="col mr-2">
				<?php echo e($games->links('UI.darts.pagination.simple')); ?>

			</div>
		</div>

		<div class="card-footer card_footer p-1">
			Games marked as practice are not accounted for in the Leader Board statistics
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/games/board.blade.php ENDPATH**/ ?>