<div class="card card-trans-4">
   
   <div class="card-header card_header p-2">01 Team Stats</div>
   
   <div class="card-body p-0 m-0">
      <table class="table table-sm table-hover">
         <thead>
            <tr>
               <th>Player Name</th>
               <th class="text-center">Played</th>
               <th class="text-center">Won</th>
               <th class="text-center">Lost</th>
               <th class="text-center">Closed</th>
               <th class="text-center">Best Score</th>
            </tr>
         </thead>
         <tbody>
            @foreach($players as $player)
               <tr>
                  <td>{{ $player->first_name }}</td>
                  <td class="text-center">{{ zeroOneTeamGamesPlayedStat($player) }}</td>
                  <td class="text-center">{{ zeroOneTeamGamesWonStat($player) }}</td>
                  <td class="text-center">{{ zeroOneTeamGamesLostStat($player) }}</td>
                  <td class="text-center">{{ zeroOneTeamGamesClosedStat($player) }}</td>
                  <td class="text-center">{{ zeroOneTeamBestScoreStat($player) }}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>

</div>
