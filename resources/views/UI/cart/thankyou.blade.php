@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.cart') }}"></i>
   Quote Request Submission
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Quote Request</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   <div class="row-col">
      <div class="card card-trans-4">
         <div class="card-body">
            <p>
               Thank you for your submission.               
            </p>
            <p>
               Someone will contact you shortly regarding your quote request.
            </p>
         </div>
      </div>
   </div>

@endsection