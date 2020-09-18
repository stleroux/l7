<div class="card mb-2 card-trans-4">

   <div class="card-header card_header p-2">Cricket Team Stats</div>
   
   <div class="card-body p-0 m-0">
      <table class="darts table table-sm table-hover">
         <thead>
            <tr>
               <th>Player Name</th>
               <th class="text-center">Played</th>
               <th class="text-center">Won</th>
               <th class="text-center">Lost</th>
               <th class="text-center">Win%</th>                           
               <th class="text-center">Best Score</th>
            </tr>
         </thead>
         <tbody>
            @foreach($players as $player)
               <tr>
                  <td>{{ $player->first_name }}</td>
                  <td class="text-center">{{ cricketTeamGamesPlayedStat($player) }}</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   
</div>
