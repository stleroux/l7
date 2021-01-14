@extends('layouts.UI.app-10')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ config('icons.add') }}"></i> --}}
   Games Board
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Games</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   @include('UI.darts.blocks.sidebar')
@endsection

@section('content')
   
   @include('UI.darts.blocks.topbar')

	<div class="card mb-2 card-trans-6">
		
		{{-- <div class="card-header section_header p-2">Dart Games</div> --}}

		<div class="card-body section_body p-2">
			@if($games->count() > 0)
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
						@foreach($games as $game)
							<tr>
                        <!-- Gamwe ID -->
								<td>{{ $game->id}}</td>
                        <!-- Game Type -->
								<td>{{ ucfirst($game->type) }}</td>
                        <!-- Team 1 Players -->
								<td class="d-none d-lg-table-cell">
									@foreach(zeroOneTeamPlayers($game, 1) as $player)
										{{ $player->first_name }}
										@if (!$loop->last)
											&nbsp;/&nbsp;
										@endif
									@endforeach
								</td>
                        <!-- Team 2 Players -->
								<td class="d-none d-lg-table-cell">
									@foreach(zeroOneTeamPlayers($game, 2) as $player)
										{{ $player->first_name }}
										@if (!$loop->last)
											&nbsp;/&nbsp;
										@endif
									@endforeach
								</td>
                        <!-- Players -->
								<td class="d-none d-lg-table-cell">
									@if($game->ind_players)
										@foreach(zeroOnePlayers($game->id) as $player)
											{{ $player->first_name }}
											@if (!$loop->last)
												&nbsp;/&nbsp;
											@endif
										@endforeach
									@endif
								</td>
                        <!-- Date -->
								<td class="">{{ $game->created_at->format('M d, Y') }}</td>
								<!-- Winner -->
                        <td class="d-none d-md-table-cell">
									@if($game->type == '301' || $game->type == '501' || $game->type == '701' || $game->type == '1001')
										{{ zeroOneGameWinner($game) }}
									@elseif($game->type == 'cricket')
										{{ cricketGameWinner($game) }}
									@endif
								</td>
                        <!-- Status -->
								<td class="d-none d-sm-table-cell">{{ $game->status }}</td>
                        <!-- Options -->
								<td  nowrap="nowrap" class="text-right">
									<form action="{{ route('darts.games.destroy', $game->id) }}" method="POST">
										@csrf
										@method('DELETE')

										@if($game->type == 'cricket')
											<div class="btn-group" role="group">
											{{-- Individual player game --}}
												@if($game->ind_players)
													@if($game->status == 'New')
														<a href="{{ route('darts.cricket.players.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
													@elseif($game->status == 'In Progress')
														<a href="{{ route('darts.cricket.players.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
													@elseif($game->status == 'Completed')
														<a href="{{ route('darts.cricket.players.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
													@else
														N/A
													@endif
												@else
												{{-- Team game --}}
													@if($game->status == 'New')
														<a href="{{ route('darts.cricket.teams.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
													@elseif($game->status == 'In Progress')
														<a href="{{ route('darts.cricket.teams.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
													@elseif($game->status == 'Completed')
														<a href="{{ route('darts.cricket.teams.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
													@else
														N/A
													@endif
												@endif
											</div>
	                           @elseif($game->type == 'baseball')
	                           	<div class="btn-group" role="group">
		                              {{-- Individual player game --}}
		                              @if($game->ind_players)
		                                 @if($game->status == 'New')
		                                    <a href="{{ route('darts.baseball.players.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.baseball.players.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.baseball.players.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif
		                              @else
		                              {{-- Team game --}}
		                                 {{-- @if($game->status == 'New')
		                                    <a href="{{ route('darts.baseball.teams.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.baseball.teams.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.baseball.teams.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif --}}
		                              @endif
		                           </div>
	                           @elseif($game->type == 'around')
	                           	<div class="btn-group" role="group">
		                              {{-- Individual player game --}}
		                              @if($game->ind_players)
		                                 @if($game->status == 'New')
		                                    <a href="{{ route('darts.around.players.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.around.players.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.around.players.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif
		                              @else
		                              {{-- Team game --}}
		                                 {{-- @if($game->status == 'New')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif --}}
		                              @endif
		                           </div>
		                        @elseif($game->type == 'castle')
	                           	<div class="btn-group" role="group">
		                              {{-- Individual player game --}}
		                              @if($game->ind_players)
		                                 @if($game->status == 'New')
		                                    <a href="{{ route('darts.castle.players.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.castle.players.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.castle.players.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif
		                              @else
		                              {{-- Team game --}}
		                                 {{-- @if($game->status == 'New')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		                                 @elseif($game->status == 'In Progress')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		                                 @elseif($game->status == 'Completed')
		                                    <a href="{{ route('darts.around.teams.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		                                 @else
		                                    N/A
		                                 @endif --}}
		                              @endif
		                           </div>
										@else
											<div class="btn-group" role="group">
												{{-- Individual player game --}}
												@if($game->ind_players)
													<div class="btn-group" role="group">
		   											@if($game->status == 'New')
		   												<a href="{{ route('darts.01.players.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		   											@elseif($game->status == 'In Progress')
		   												<a href="{{ route('darts.01.players.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		   											@elseif($game->status == 'Completed')
		   												<a href="{{ route('darts.01.players.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		   											@else
		   												N/A
		   											@endif
													</div>
												@else
		   										{{-- Team game --}}
		   										<div class="btn-group" role="group">
		   											@if($game->status == 'New')
		   												<a href="{{ route('darts.01.teams.index', $game->id) }}" class="btn btn-sm btn-success">Start</a>
		   											@elseif($game->status == 'In Progress')
		   												<a href="{{ route('darts.01.teams.index', $game->id) }}" class="btn btn-sm btn-warning">Resume</a>
		   											@elseif($game->status == 'Completed')
		   												<a href="{{ route('darts.01.teams.index', $game->id) }}" class="btn btn-sm btn-primary">Results</a>
		   											@else
		   												N/A
		   											@endif
		   									   </div>
											   @endif
											</div>
										@endif

										@can('dart-delete')
											<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this game and all related entries?');">Delete</button>
										@endcan
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>


			@else
				{{ config('settings.noRecordsFound') }}
			@endif
		</div>
		
		{{-- SHOW PAGINATION --}}
		<div class="row d-flex">
			<div class="col ml-2">
				Showing records {{ $games->firstItem() }} to {{ $games->lastItem() }} of {{$games->total()}}
			</div>
			<div class="col mr-2">
				{{ $games->links('UI.darts.pagination.simple') }}
			</div>
		</div>

		<div class="card-footer card_footer p-1">
			Games marked as practice are not accounted for in the Leader Board statistics
		</div>
	</div>

@endsection
