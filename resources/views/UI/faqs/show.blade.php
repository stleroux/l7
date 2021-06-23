@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.faq') }} mr-1"></i>
   Frequently Asked Questions
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
   <li class="breadcrumb-item">FAQ</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.carvings.blocks.popular') --}}
   {{-- @include('UI.carvings.blocks.tags') --}}
@endsection

@section('topbar')
   {{-- @include('UI.carvings.faq.topbar') --}}
@endsection

@section('content')

   @include('UI.faqs.show.topbar')
   
   <div class="card card-trans-4 text-light">
      
      <div class="card-header bg-dark">
         <div class="row">
            <div class="col">
               <div>
                  {{ ucfirst($faq->question) }}
               </div>
            </div>
         </div>
      </div>
      
      <div class="card-body p-2">
         
         {{-- <div class="bg-dark px-2 py-1">
            Answer
         </div> --}}
         <div class="pb-0">
            {!! $faq->answer !!}
         </div>

      </div>

   </div>

   {{-- @include('help.index', ['title'=>'View Requested Feature', 'icon'=>'features', 'path'=>'UI.features.show']) --}}
   
@endsection
