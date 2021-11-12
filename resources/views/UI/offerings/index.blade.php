@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>
   Types of Carvings Offered
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Offerings</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   {{-- @include('UI.carvings.blocks.tags') --}}
   @include('UI.carvings.blocks.general')
@endsection

@section('content')

   @foreach ($offerings as $offering)
      <div class="card card-trans-4">
         <div class="card-header card-trans-2 py-1 pl-3">
            <div class="card-title font-weight-bold">
               {{ ucwords($offering->name) }}
            </div>
         </div>
         <div class="card-body p-0">
            <ul>
               @foreach (\App\Models\Offering::where(['category' => $offering->id])->orderBy('name')->get() as $element)
                  <li>
                     {{ ucwords($element->name) }}
                  </li>
               @endforeach
            </ul>
         </div>
      </div>
      
   @endforeach

   <div class="alert alert-warning p-1">Stay tuned for more items to be added.</div>

@endsection
