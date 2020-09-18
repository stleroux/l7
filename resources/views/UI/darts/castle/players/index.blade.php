@extends ('layouts.UI.app-10')

@section('stylesheet')
      <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
      <style>
         td.item { cursor: pointer; background-color: red; }
         td.on { background-color: green; }
      </style>
@endsection

@section('pageHeader')
      CASTLE - 
      @if($players->count() > 1) Multi @else Individual @endif 
      Player Game
@endsection

@section('breadcrumb')
      <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
      <li class="breadcrumb-item">Castle</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

   @include('UI.darts.castle.players.topbar')

   <div class="card card-trans-4">

      <div class="card-body p-2">

         <div class="row">

            @foreach($players as $player)

               <div class="col-xl-3 mb-3">

                  <div class="card mb-0 card-trans-4">

                     <div class="card-header">
                        <div class="row">
                           <div class="col font-weight-bold h3">{{ $player->first_name }}</div>
                           <div class="col-3 text-right">
                              <select name="" class="form-control card-trans-4 font-weight-bold">
                                 @for ($i = 0; $i < 21; $i++)
                                    <option value="{{ $i }}" class="font-weight-bold">{{ $i }}</option>
                                 @endfor
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="card-body card-trans-4">

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="40%" class=""></td>
                              <td width="20%" class="item border">15</td>
                              <td width="40%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td class="30%"></td>
                              <td width="20%" class="item border">13</td>
                              <td width="20%" class="item border">14</td>
                              <td width="30%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="20%" class=""></td>
                              <td width="20%" class="item border">10</td>
                              <td width="20%" class="item border">11</td>    
                              <td width="20%" class="item border">12</td>
                              <td width="20%" class=""></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="10%"></td>
                              <td width="20%" class="item border">6</td>
                              <td width="20%" class="item border">7</td>
                              <td width="20%" class="item border">8</td>    
                              <td width="20%" class="item border">9</td>
                              <td width="10%"></td>
                           </tr>
                        </table>

                        <table class="table table-sm table-borderless mb-0">
                           <tr class="text-center">
                              <td width="20%" class="item border">1</td>    
                              <td width="20%" class="item border">2</td>    
                              <td width="20%" class="item border">3</td>    
                              <td width="20%" class="item border">4</td>    
                              <td width="20%" class="item border">5</td>
                           </tr>
                        </table>

                     </div>

                  </div>

               </div>

            @endforeach

         </div>

      </div>

      <div class="card-footer p-1">
         At the moment, it is not possible to save the game in the system
         <span class="bg-danger float-right px-2">Make sure you delete the game from the main list when you are done.</span>
      </div>

   </div>

   @include('UI.darts.castle.players.help')

@endsection

@section('scripts')
   <script>
      $( function() {
         $('td.item').click( function() {
            $(this).toggleClass('on');
         } )
      });
   </script>
@endsection
