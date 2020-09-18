@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.add') }}"></i> --}}
   BASEBALL - @if($players->count() > 1) Multi @else Individual @endif Player Game
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Baseball</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
   {{-- @include('UI.darts.blocks.sidebar') --}}
@endsection

@section('content')
   
   @include('UI.darts.baseball.players.topbar')

      <div class="card mb-2 card-trans-4">

         <div class="card-body card_body p-2 card-trans-2">
            <table class="table table-sm table-striped table-hover">
               <thead align="center" class="bg-dark">
                  <tr>
                     <td class="bg-default"></td>
                     <th class="bg-dark" colspan="9"><h2>Innings</h2></th>
                     <td class="bg-default"></td>
                  </tr>
                  <tr>
                     <th class="h2 bg-dark">Player</th>
                     @foreach($innings as $inning)
                        <th class="h2 bg-dark">
                           {{ $inning }}
                        </th>
                     @endforeach
                     <th class="h1 bg-dark">Total</th>
                  </tr>
               </thead>
               <tbody class="align-center">
                  @foreach($players as $p)
                     <tr class="">
                        <td class="h2 align-middle">{{ $players->get($loop->index)->first_name }}</td>
                        @foreach($innings as $inning)
                           <td class="p-1">
                              <div class="form-group_{{$p->id}} input-group p-1 h4">
                                 <select class="custom-select custom-select-lg py-0 prc" id="" name="p{{$p->id}}[]">
                                    <option class="" value="0">0</option>
                                    @foreach($scores as $score)
                                       <option class="" value="{{ $score }}">{{ $score }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </td>
                        @endforeach
                        <td>
                           <div class="h1 text text-center font-weight-bold pt-2">
                              <output id="result_{{$p->id}}"></output>
                           </div>
                        </td>
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

   {{-- </form> --}}
   @include('UI.darts.baseball.help.help')

@endsection

@section('scripts')
   <script>
      @foreach($players as $p)
      $('.form-group_{{$p->id}}').on('input','.prc', function(){
         var totalSum = 0;
         $('.form-group_{{$p->id}} .prc').each(function(){
            var inputVal = $(this).val();
            if($.isNumeric(inputVal)){
               totalSum += parseFloat(inputVal);
            }
         });
         $('#result_{{$p->id}}').html(totalSum);
      });
      @endforeach
   </script>
@endsection
