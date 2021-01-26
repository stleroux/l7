<div>

	<div class="card p-1">
		<div class="card-body p-1">
			
			<div class="row mb-2">

				<?php echo $__env->make('livewire.perPageDD', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<div class="col">
					<div class="input-group">
						<input wire:model="search" class="form-control" type="text" placeholder="Search...">
						<div class="input-group-append">
							<button wire:click="clear" class="btn btn-outline-secondary" type="button">Clear</button>
						</div>
					</div>
				</div>

			</div>
			
			<div class="row">

				<table class="table table-sm table-hover">
					<thead>
						<tr>
							<th>
								<a wire:click.prevent="sortBy('col_no')" role="button" href="#">
									ColN<supp>o</supp>
									<?php echo $__env->make('common.sortIcons', ['field'=>'col_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('title')" role="button" href="#">
									Title
									<?php echo $__env->make('common.sortIcons', ['field'=>'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('running_time')" role="button" href="#">
									Runtime
									<?php echo $__env->make('common.sortIcons', ['field'=>'running_time'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('category')" role="button" href="#">
									Genre
									<?php echo $__env->make('common.sortIcons', ['field'=>'category_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('imdb_no')" role="button" href="#">
									IMDB N<supp>o</supp>
									<?php echo $__env->make('common.sortIcons', ['field'=>'imdb_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</a>
							</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($movie->col_no); ?></td>
								<td><a href="<?php echo e(route('admin.movies.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
								<td><?php echo e($movie->running_time); ?></td>
								<td><?php echo e($movie->category); ?></td>
								<td><?php echo e($movie->imdb_no); ?></td>
								<td>

									<div class="float-right">
										<div class="btn-group">
											<a href="<?php echo e(route('admin.movies.edit', $movie)); ?>"
												title="Edit Movie">
												<i class="<?php echo e(config('icons.edit')); ?>"></i>
											</a>
											<a type="button"
												class="resetViews-model"
												data-toggle="modal"
												data-target="#resetViewsModal"
												data-id="<?php echo e($movie->id); ?>"
												data-url="<?php echo e(url('admin/movies/resetViews', $movie)); ?>"
												title="Reset Views Count"
												>
												<i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
											</a>
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('movie-delete')): ?>
												<a type="button"
													class="destroy-model"
													data-toggle="modal"
													data-target="#destroyModal"
													data-id="<?php echo e($movie->id); ?>"
													data-url="<?php echo e(url('admin/movies', $movie)); ?>"
													title="Delete Movie"
													>
													<i class="<?php echo e(config('icons.trash')); ?> text-danger pl-1"></i>
												</a>
											<?php endif; ?>
										</div>
									</div>

								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>

			</div>

			<!-- Pagination -->
			<div class="row">

				<div class="col-xl-8">
					<?php echo e($movies->links()); ?>

				</div>

				<div class="col text-right text-muted">
					Showing <?php echo e($movies->firstItem()); ?> to <?php echo e($movies->lastItem()); ?> out of <?php echo e($movies->total()); ?> results
				</div>

			</div>

		</div>
	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/livewire/movies-table.blade.php ENDPATH**/ ?>