<div>

	<div class="card p-1">
		<div class="card-body p-1">
			
			<div class="row mb-2">

				@include('livewire.perPageDD')

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
									@include('common.sortIcons', ['field'=>'col_no'])
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('title')" role="button" href="#">
									Title
									@include('common.sortIcons', ['field'=>'title'])
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('running_time')" role="button" href="#">
									Runtime
									@include('common.sortIcons', ['field'=>'running_time'])
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('category')" role="button" href="#">
									Genre
									@include('common.sortIcons', ['field'=>'category_id'])
								</a>
							</th>
							<th>
								<a wire:click.prevent="sortBy('imdb_no')" role="button" href="#">
									IMDB N<supp>o</supp>
									@include('common.sortIcons', ['field'=>'imdb_no'])
								</a>
							</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($movies as $movie)
							<tr>
								<td>{{ $movie->col_no }}</td>
								<td><a href="{{ route('admin.movies.show', $movie->id) }}">{{ $movie->title }}</a></td>
								<td>{{ $movie->running_time }}</td>
								<td>{{ $movie->category }}</td>
								<td>{{ $movie->imdb_no }}</td>
								<td>

									<div class="float-right">
										<div class="btn-group">
											<a href="{{ route('admin.movies.edit', $movie) }}"
												title="Edit Movie">
												<i class="{{ config('icons.edit') }}"></i>
											</a>
											<a type="button"
												class="resetViews-model"
												data-toggle="modal"
												data-target="#resetViewsModal"
												data-id="{{ $movie->id }}"
												data-url="{{ url('admin/movies/resetViews', $movie) }}"
												title="Reset Views Count"
												>
												<i class="{{ config('icons.resetViews') }} text-secondary"></i>
											</a>
											@can('movie-delete')
												<a type="button"
													class="destroy-model"
													data-toggle="modal"
													data-target="#destroyModal"
													data-id="{{ $movie->id }}"
													data-url="{{ url('admin/movies', $movie) }}"
													title="Delete Movie"
													>
													<i class="{{ config('icons.trash') }} text-danger pl-1"></i>
												</a>
											@endcan
										</div>
									</div>

								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

			</div>

			<!-- Pagination -->
			<div class="row">

				<div class="col-xl-8">
					{{ $movies->links() }}
				</div>

				<div class="col text-right text-muted">
					Showing {{ $movies->firstItem() }} to {{ $movies->lastItem()}} out of {{ $movies->total() }} results
				</div>

			</div>

		</div>
	</div>

</div>
