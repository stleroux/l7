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
	            {{-- <th></th> --}}
				</tr>
			</thead>
			<tbody>
				@php
					$t1no = zeroOneTeamScores($game, 1)->count();
				@endphp
				@foreach(zeroOneTeamScores($game, 1) as $score)
					<tr>
						<td>{{ $t1no }}</td>
						<td class="text-center">{{ $score->first_name }}</td>
						<td class="text-center">{{ $score->score }}</td>
						<td class="text-center">{{ $score->remaining }}</td>
	               {{-- <td class="p-0 m-0"><small><i class="fas fa-pencil-alt"></i></small></td> --}}
					</tr>
					@php
						$t1no --;
					@endphp
				@endforeach
			</tbody>
		</table>
	</div>
	
</div>
