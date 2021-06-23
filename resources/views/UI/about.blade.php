@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.about-us') }}"></i>
   About Us
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">About Us</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('errors.construction')

   {{-- ABOUT US  --}}
   @if($aboutUs)
      <div class="card card-trans-4">
         <div class="card-header section_header p-2">
            <i class="{{ config('icons.about-us') }}"></i>
            {{ ucwords($aboutUs->title) }}
         </div>

         <div class="card-body text-light p-2">
            {!! $aboutUs->body !!}
         </div>
      </div>
   @endif

   <div class="row">
      @if($stephane)
         {{-- ABOUT STEPHANE --}}
         <div class="col-sm-6 pr-1">
            <div class="card card-trans-4">
               <div class="card-header section_header p-2">
                  <i class="{{ config('icons.male') }}"></i>
                  {{ ucwords($stephane->title) }}
               </div>
               <div class="card-body text-light p-2">
                  {!! $stephane->body !!}
               </div>
            </div>
         </div>
      @endif

      @if($stacie)
         {{-- ABOUT STACIE --}}
         <div class="col-sm-6 pl-1">
            <div class="card card-trans-4 pb-0 mb-0">
               <div class="card-header section_header p-2">
                  <i class="{{ config('icons.female') }}"></i>
                  {{ ucwords($stacie->title) }}
               </div>
               <div class="card-body text-light p-2">
                  {!! $stacie->body !!}
               </div>
            </div>
         </div>
      @endif

   </div>

@endsection
