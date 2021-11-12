@extends('layouts.UI.homepage')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
{{--    <div class="container-fluid">
      <div class="row">
         <i class="{{ config('icons.projects') }} col-md-2 text-green pr-md-2 d-none d-md-block"></i>
         <div class="col-sm-12 col-md-8">
            Welcome to TheWoodBarn.ca
         </div>
         <i class="{{ config('icons.projects') }} col-md-2 text-green pl-md-2 d-none d-md-block"></i>
      </div>
   </div> --}}
@endsection

@section('breadcrumb')
@endsection

@section('rightColumn')
   @include('UI.blocks.popularItems')
   @include('UI.blocks.faqs')
@endsection

@section('content')

   @include('UI.homepage.greeting')
   @include('UI.homepage.nonRegistered')
   @include('UI.homepage.warning')
   @include('UI.homepage.newUser')
   @include('UI.homepage.interests')
   @include('UI.homepage.blog')

@endsection
