<div class="card mb-2 card-trans-4">

	<div class="card-header p-2 text-light">Team Statistics</div>

	<div class="card-body p-2 card-trans-2">
		<table class="table table-sm table-hover">
			<thead>
				<tr>
					<th></th>
					<th class="text-center">Team 1</th>
					<th class="text-center">Team 2</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-center">
					<th class="">Best Score</th>
					<td>{{ zeroOneTeamBestScore($game, 1) }}</td>
					<td>{{ zeroOneTeamBestScore($game, 2) }}</td>
				</tr>
				<tr class="text-center">
					<th class="">Best Score By</th>
					<td>{{ zeroOneTeamBestScoreBy($game, 1) }}</td>
					<td>{{ zeroOneTeamBestScoreBy($game, 2) }}</td>
				</tr>
				<tr class="text-center">
					<th class="">Score Avg</th>
					<td>{{ (zeroOneTeamScores($game, 1)->sum('score') ? number_format(zeroOneTeamScores($game, 1)->sum('score') / zeroOneTeamScores($game, 1)->count(), 2) : 'N/A') }}</td>
					<td>{{ (zeroOneTeamScores($game, 2)->sum('score') ? number_format(zeroOneTeamScores($game, 2)->sum('score') / zeroOneTeamScores($game, 2)->count(), 2) : 'N/A') }}</td>
				</tr>
				<tr class="text-center">
					<th class="">Avg Score Per Dart</th>
					<td>{{ (zeroOneTeamScores($game, 1)->sum('score') ? number_format((zeroOneTeamScores($game, 1)->sum('score') / zeroOneTeamScores($game, 1)->count()) / 3, 2 ) : 'N/A') }}</td>
					<td>{{ (zeroOneTeamScores($game, 2)->sum('score') ? number_format((zeroOneTeamScores($game, 2)->sum('score') / zeroOneTeamScores($game, 2)->count()) / 3, 2 ) : 'N/A') }}</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>
