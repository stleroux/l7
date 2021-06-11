@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.features') }}"></i>
   View Requested Feature
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('features.index') }}">Requested Features</a></li>
   <li class="breadcrumb-item">View Requested Feature</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('UI.features.show.topbar')
   
   <div class="card card-trans-4 text-light">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  {{ ucfirst($feature->title) }}
               </div>
            </div>
            <div class="col text-right">
               Status: 
               <div class="badge badge-danger">
                  @if($feature->status)
                     {{ $feature->status }}
                  @else
                     N/A
                  @endif
               </div>
            </div>
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <div class="bg-dark px-2 py-1">
            Description
         </div>
         <div class="pb-0">
            {!! $feature->description !!}
         </div>

         <div class="bg-dark px-2 py-1">
            Resolution
         </div>
         <div class="pb-0">
            @if($feature->resolution)
               {!! $feature->resolution !!}
            @else
               N/A
            @endif
         </div>

      </div>

   </div>

   @include('help.index', ['title'=>'View Requested Feature', 'icon'=>'features', 'path'=>'UI.features.show'])
   
@endsection
