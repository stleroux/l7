@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.contact-us') }}"></i>
   Thank you for your message
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Contact Us</li>
@endsection

@section ('content')

   <div class="card card-trans-2 text-center text-light mb-2">
      
      {{-- <div class="card-header section_header p-2"></div> --}}

      <div class="card-body p-2">
         <p>Thank you for contacting us.</p>
         <p>We will be in touch shortly if needed.</p>
      </div>

   </div>

@endsection
