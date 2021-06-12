@extends('layouts.UI.app-10-2')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@stop

@section('pageHeader')
	<i class="{{ config('icons.projects') }}"></i>
	Projects
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item">Projects</li>
@endsection

@section('rightColumn')
	@include('UI.projects.blocks.popular')
	@include('UI.projects.blocks.faqs')
@endsection

@section('notice')
	@include('UI.projects.index.notice')
@endsection

@section('topbar')
	@include('UI.projects.index.topbar')
@endsection

@section('content')

	@if(count($projects) > 0)
		
		<div class="card card-trans-2 mb-3">
		
			<div class="card-body card-trans-2 pb-0 mb-0">

				<div class="row card-trans-0 p-0 m-0 mb-0">

					@foreach($projects as $project)

						<div  class="col-xl-3 pb-2">

							<div id="card-hover" class="h-100 w-100" style="border: 2px black solid;">

								<div class="position-relative p-0">
									
									@if($project->created_at > \Carbon\Carbon::now()->subMonth())
										<div class="ribbon-wrapper">
											<div class="ribbon bg-lime m-0">New</div>
										</div>
									@endif

									<div class="h-100 thumbnail pt-2 text-center">

										<a href="{{ route('projects.show', $project->id) }}">
										
											@if($project->images->count() > 0)
												<img src="/_projects/{{ $project->id }}/thumbs/{{ $project->images[0]->name }}" alt="{{ $project->name}}" height="150px" width="95%" />
											@else
												<img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
											@endif
										
											<h4 class="badge-dark p-1 m-1">{{ ucwords($project->name) }}</h4>
										
											<div class="row">
												<div class="col text-right pr-0">
													<strong>Category :</strong>
												</div>
												<div class="col text-left pl-1">
													{{ $project->category }}
												</div>
											</div>
										
											<div class="row">
												<div class="col text-right pr-0">
													<strong>Views :</strong>
												</div>
												<div class="col text-left pl-1">
													{{ $project->views }}
												</div>
											</div>
										
											<div class="row">
												<div class="col text-right pr-0">
													<strong>Comments :</strong>
												</div>
												<div class="col text-left pl-1">
													{{ $project->comments->count() }}
												</div>
											</div>
										
											<div class="row">
												<div class="col text-right pr-0">
													<strong>Images :</strong>
												</div>
												<div class="col text-left pl-1">
													 {{ count($project->images) }}
												</div>
											</div>
										
											<div class="row">
												<div class="col text-right pr-0">
													<strong>Likes :</strong>
												</div>
												<div class="col text-left pl-1">
													{{ $project->likes()->count() }}
												</div>
											</div>
										
											<div class="row-col pt-2 pb-2">

												@can('like', $project)
													<form class="" action="{{ route('like') }}" method="POST">
														@csrf
														<input type="hidden" name="likeable_type" value="{{ get_class($project) }}"/>
														<input type="hidden" name="id" value="{{ $project->id }}"/>
														<button class="btn btn-block btn-xs btn-outline-success text-dark font-weight-bold">@lang('Like')</button>
													</form>
												@endcan

												@can('unlike', $project)
													<form class="" action="{{ route('unlike') }}" method="POST">
														@csrf
														@method('DELETE')
														<input type="hidden" name="likeable_type" value="{{ get_class($project) }}"/>
														<input type="hidden" name="id" value="{{ $project->id }}"/>
														<button class="btn btn-block btn-xs btn-outline-danger text-dark"><strong>@lang('Unlike')</strong></button>
													</form>
												@endcan

											</div>

										</a>

									</div>

								</div>

							</div>

						</div>

					@endforeach

				</div>

				{{-- SHOW PAGINATION --}}
				@if (strpos($_SERVER['REQUEST_URI'], "1000") === false)
					
					<div class="row mb-2">
					
						<div class="col ml-2 text-light">
							Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{$projects->total()}} entries
						</div>
					
						<div class="col text-right p-0 m-0">
							{{ $projects->links('UI.projects.pagination.custom') }}
						</div>
					
					</div>

				@endif

			</div>

		</div>

	@else
		
		<div class="col-row p-3 card-trans-4 text-dark">
			{{ config('settings.noRecordsFound') }}
		</div>

	@endif

@endsection
