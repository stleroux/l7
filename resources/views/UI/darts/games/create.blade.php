@extends ('layouts.UI.app-10')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   Create New Game - Step 1
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Create Game</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   @include('UI.darts.blocks.sidebar')
@endsection

@section('content')

   <form action="{{ route('darts.games.store') }}" method="POST">
      @csrf

      <div class="card mb-2 card-trans-4">
         
         <div class="card-header card_header p-2">
            Select Game Type
         </div>
         
         <div class="card-body card_body pb-1">
            <div class="col-sm-3">
               <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                  <select name="type" class="form-control form-control-sm" placeholder="Pick One...">
                     <option value="301">301</option>
                     <option value="501">501</option>
                     <option value="701">701</option>
                     <option value="1001">1001</option>
                     <option value="around">Around the World</option>
                     <option value="baseball">Baseball</option>
                     <option value="castle">Castle</option>
                     <option value="cricket">Cricket</option>
                  </select>
                  <div class="pl-1 bg-danger">{{ $errors->first('type') }}</div>
               </div>
            </div>
         </div>
         
         <div class="card-footer p-1">
            {{-- Fields marked with an<span class="required"></span> are required. --}}
            <span class="float-right">
               <button type="submit" class="btn btn-sm btn-primary">Next Step</button>
            </span>
         </div>

      </div>

   </form>

@endsection
