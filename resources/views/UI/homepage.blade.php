@extends('layouts.UI.homepage')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.projects') }} col-2 text-green pr-2"></i>
   <div class="col-8">
      Welcome to TheWoodBarn.ca
   </div>
   <i class="{{ config('icons.projects') }} col-2 text-green pl-2"></i>
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li> --}}
@endsection

@section('rightColumn')
   @include('UI.blocks.popularItems')
@endsection

@section('content')
   {{-- <div class="container-fluid pt-2"> --}}
      {{-- <example-component></example-component> --}}
      @include('UI.homepage.greeting')
      @include('UI.homepage.warning')
      @include('UI.homepage.newUser')
      @include('UI.homepage.interests')
      @include('UI.homepage.blog')
   {{-- </div> --}}
@endsection
