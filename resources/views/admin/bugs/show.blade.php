@extends('layouts.admin.admin-10-2')

@include('admin.bugs.show.sections.stylesheet')
@include('admin.bugs.show.sections.pageHeader')
@include('admin.bugs.show.sections.breadcrumb')
@include('admin.bugs.show.sections.sidebar')
@include('admin.bugs.show.sections.functions')
@include('admin.bugs.show.sections.formBegin')
@include('admin.bugs.show.sections.formEnd')

@section('content')

   {{-- @include('admin.bugs.show.topbar') --}}
   
   <div class="card card-trans-4">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  {{ ucfirst($bug->title) }}
               </div>
            </div>
            <div class="col text-right">
               Status: 
               <div class="badge badge-danger">
                  @if($bug->status)
                     {{ $bug->status }}
                  @else
                     N/A
                  @endif
               </div>
            </div>
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <div class="bg-dark px-2 py-1">
            Page URL
         </div>
         <div class="pb-3">
            {{ $bug->page_url }}
         </div>
         
         <div class="bg-dark px-2 py-1">
            Description
         </div>
         <div class="pb-0">
            {!! $bug->description !!}
         </div>

         <div class="bg-dark px-2 py-1">
            Resolution
         </div>
         <div class="pb-0">
            @if($bug->resolution)
               {!! $bug->resolution !!}
            @else
               N/A
            @endif
         </div>

      </div>

   </div>

   @include('admin.bugs.help')

@endsection
