@extends('layouts.admin.admin')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.features') }}"></i>
   Show Feature Request
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.features.index') }}">Feature Requests</a></li>
   <li class="breadcrumb-item">Show</li>
@endsection

@section('right_column')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('admin.features.show.topbar')
   
   <div class="card card-trans-4">
      
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

@endsection
