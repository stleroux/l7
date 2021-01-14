@extends('layouts.admin.admin-10-2')

@include('admin.features.show.sections.stylesheet')
@include('admin.features.show.sections.pageHeader')
@include('admin.features.show.sections.breadcrumb')
@include('admin.features.show.sections.sidebar')
@include('admin.features.show.sections.functions')
@include('admin.features.show.sections.formBegin')
@include('admin.features.show.sections.formEnd')

@section('content')

   {{-- @include('admin.features.show.topbar') --}}
   
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

   @include('admin.features.help')
   
@endsection
