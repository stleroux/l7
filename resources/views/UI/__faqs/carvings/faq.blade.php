@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@stop

@section('pageHeader')
   <i class="{{ config('icons.carvings') }} mr-1"></i>
   Carvings FAQ
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('UI.carvings.index') }}">Carvings</a></li>
   <li class="breadcrumb-item">Carvings FAQ</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   @include('UI.carvings.blocks.tags')      
@endsection

@section('topbar')
   @include('UI.carvings.faq.topbar')
@endsection

@section('content')

   {{-- <div class="card card-trans-0 w-100 pt-2 px-2"> --}}
   @if(count($carvings) > 0)
      
      <div class="card card-trans-2 mb-3">
      
         <div class="card-body card-trans-2 pb-0 mb-0">

            <div class="row card-trans-0 p-0 m-0 mb-0">
            </div>

         </div>

      </div>

   @endif

@endsection