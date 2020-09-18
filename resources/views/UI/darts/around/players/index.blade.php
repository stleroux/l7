@extends ('layouts.UI.app-10')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <style>
    table { overflow: hidden; }
    td, th { border: 1px solid #999; padding: 1px; position: relative; }
    /*Row*/
    td:hover::before { background-color: rgba(245, 245, 245, 0.4); content: ''; height: 100%; left: -5000px; position: absolute; top: 0; width: 10000px; z-index: -2; }
    /*Column*/
    td:hover::after { background-color: rgba(245, 245, 245, 0.4); content: ''; height: 10000px; left: 0; position: absolute; top: -5000px; width: 100%; z-index: -1; }
    td.on { background-color: rgba(0, 255, 0, 0.5); }
  </style>
@endsection

@section('pageHeader')
   AROUND the WORLD - 
   @if($players->count() > 1) Multi @else Individual @endif 
   Player Game
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Around the World</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

   @include('UI.darts.around.players.topbar')

   <div class="card mb-2 card-trans-4">
      <div class="card-body p-2">
         <table class="table table-striped table-borderless">
            <thead>
               <tr class="card-trans-4 text-center">
                  <th>Name</th>
                  @foreach($pies as $pie)
                     <th>{{ $pie }}</th>
                  @endforeach
               </tr>
            </thead>
            <tbody>
               @foreach($players as $p)
                  <tr>
                     <td class="card-trans-4">
                        {{ $p->first_name }} {{ $p->last_name }}
                     </td>
                     @foreach($pies as $pie)
                        <td class="item border text-center">
                          {{-- {{ $pie }} --}}
                           {{-- <input
                              type="checkbox"
                              data-toggle="toggle"
                              data-size="xs"
                              data-onstyle="success"
                              data-offstyle="secondary"
                              data-on="<i class='fa fa-check'></i>"
                              data-off="<i class='fa fa-ban'></i>"
                           > --}}
                        </td>
                     @endforeach
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>

      <div class="card-footer p-1">
        At the moment, it is not possible to save the game in the system
        <span class="bg-danger float-right px-2">Make sure you delete the game from the main list when you are done.</span>
      </div>

   </div>

  @include('UI.darts.around.players.help')

@endsection

@section('scripts')
   <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
      <script>
      $( function() {
         $('td.item').click( function() {
            $(this).toggleClass('on');
         } )
      });
   </script>
@endsection
