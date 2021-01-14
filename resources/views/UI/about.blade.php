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
   <div class="card card-trans-4 mb-2">
      <div class="card-header section_header">
         <i class="{{ config('icons.about-us') }}"></i>
         About Us
      </div>

      <div class="card-body text-light">
         <p>Just some text about us</p>
      </div>
   </div>

   <div class="row">
      {{-- ABOUT STEPHANE --}}
      <div class="col-sm-6 pr-1">
         <div class="card card-trans-4 mb-2">
            <div class="card-header section_header">
               <i class="{{ config('icons.male') }}"></i>
               About Stephane
            </div>
            <div class="card-body text-light">
               <p>Just some text about me</p>
               <p>Just some text about me</p>
            </div>
         </div>
      </div>

      {{-- ABOUT STACIE --}}
      <div class="col-sm-6 pl-1">
         <div class="card card-trans-4 mb-2">
            <div class="card-header section_header">
               <i class="{{ config('icons.female') }}"></i>
               About Stacie
            </div>
            <div class="card-body text-light">
               <p>Just some text about her</p>
               <p>Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her Just some text about her</p>
            </div>
         </div>
      </div>

   </div>

@endsection
