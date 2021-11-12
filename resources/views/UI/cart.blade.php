@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
   <link rel="stylesheet" href="{{ asset('css/UI/floating_labels.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.cart') }}"></i>
   Quote Request
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Quote Request</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @livewire('cart-component')

@endsection
