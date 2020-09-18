@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.contact-us') }}"></i>
   Contact Us
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Contact Us</li>
@endsection

@section ('content')

<div class="col-xl-8 offset-xl-2">
   <div class="card card-trans-4 mb-2">

      {{-- <div class="card-header section_header p-2">
            <i class="{{ Config::get('icons.contact-us') }}"></i>
            Contact Us
      </div> --}}
      
      <div class="card-body p-2">
         <form action="/contact" method="POST" class="px-0 py-2">   
            @csrf
            @honeypot

            <div class="form-group py-0">
               <label for="subject" class="required">Subjet</label>
               <input
                  id="subject"
                  name="subject"
                  class="form-control form-control-sm @error('subject') is-invalid @enderror"
                  autofocus="autofocus"
                  value="{{ old('subject') }}">
               @error('subject')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
            </div>

            @if(Auth::user())
               <div class="form-group py-0">
                  <label for="email" class="required">Email</label>
                  <input
                     id="email"
                     name="email"
                     class="form-control form-control-sm @error('email') is-invalid @enderror"
                     readonly="readonly"
                     value="{{ Auth::user()->email }}">
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
            @else
               <div class="form-group py-0">
                  <label for="email" class="required">Email</label>
                  <input
                     id="email"
                     name="email"
                     class="form-control form-control-sm @error('email') is-invalid @enderror"
                     value="{{ old('email') }}">
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
            @endif
            
            <div class="form-group py-0">
               <label for="message" class="required">Message</label>
               <textarea
                  id="message"
                  name="message"
                  class="form-control form-control-sm @error('message') is-invalid @enderror"
                  placeholder="Type your message here"
                  rows="5">{{ old('message') }}</textarea>
               @error('message')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
            </div>

            {{-- @include('common.reCaptcha') --}}

            <div class="text-center">
               <input type="submit" value="Send Message" class="btn btn-sm btn-primary">
            </div>

         </form>
      </div>

      <div class="card-footer pt-1 pb-1 pl-2">
         Fields marked with an <span class="required"></span> are required
      </div>

   </div>
</div>
@endsection
