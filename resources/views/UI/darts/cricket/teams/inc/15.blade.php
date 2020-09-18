<tr>
   <td class="align-middle">
      <form action="{{ route('darts.cricket.teams.store') }}" method="POST">
         @csrf
         <input type="hidden" name="team_id" value="1">
         <input type="hidden" name="game_id" value="{{ $game->id }}">
         <button type="submit" name="score" value="15" class="btn btn-sm btn-success" {{ ($game->status == 'Completed') ? 'disabled' : '' }}>
            <i class="far fa-2x fa-arrow-alt-circle-up"></i>
         </button>
      </form>
   </td>
   <td class="align-middle">
      @if($fifteen_1_count == 1)
         <i class="fas fa-2x fa-minus-circle"></i>
      @elseif($fifteen_1_count == 2)
         <i class="fas fa-2x fa-plus-circle"></i>
      @elseif($fifteen_1_count == 3)
         <i class="fas fa-2x fa-times-circle"></i>
      @elseif($fifteen_1_count > 3)
         <h2 class="pt-1">{{ $fifteen_1_points }}</h2>
      @endif
   </td>
   <td class="align-middle">
      <form action="{{ route('darts.cricket.teams.store') }}" method="POST">
         @csrf
         <input type="hidden" name="team_id" value="1">
         <input type="hidden" name="game_id" value="{{ $game->id }}">
         <button type="submit" name="score" value="-15" class="btn btn-sm btn-danger" {{ ($game->status == 'Completed') ? 'disabled' : '' }}>
            <i class="far fa-2x fa-arrow-alt-circle-down "></i>
         </button>
      </form>
   </td>

   <th class="h1 bg-dark">15</th>

   <td class="align-middle">
      <form action="{{ route('darts.cricket.teams.store') }}" method="POST">
         @csrf
         <input type="hidden" name="team_id" value="2">
         <input type="hidden" name="game_id" value="{{ $game->id }}">
         <button type="submit" name="score" value="-15" class="btn btn-sm btn-danger" {{ ($game->status == 'Completed') ? 'disabled' : '' }}>
            <i class="far fa-2x fa-arrow-alt-circle-down "></i>
         </button>
      </form>
   </td>
   <td class="align-middle">
      @if($fifteen_2_count == 1)
         <i class="fas fa-2x fa-minus-circle"></i>
      @elseif($fifteen_2_count == 2)
         <i class="fas fa-2x fa-plus-circle"></i>
      @elseif($fifteen_2_count == 3)
         <i class="fas fa-2x fa-times-circle"></i>
      @elseif($fifteen_2_count > 3)
         <h2 class="pt-1">{{ $fifteen_2_points }}</h2>
      @endif
   </td>
   <td class="align-middle">
      <form action="{{ route('darts.cricket.teams.store') }}" method="POST">
         @csrf
         <input type="hidden" name="team_id" value="2">
         <input type="hidden" name="game_id" value="{{ $game->id }}">
         <button type="submit" name="score" value="15" class="btn btn-sm btn-success" {{ ($game->status == 'Completed') ? 'disabled' : '' }}>
            <i class="far fa-2x fa-arrow-alt-circle-up"></i>
         </button>
      </form>
   </td>
</tr>
