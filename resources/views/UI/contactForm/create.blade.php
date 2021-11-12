@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.contact-us') }}"></i>
   Contact Us
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Contact Us</li>
@endsection

@section ('content')



<div class="col-xl-8 offset-xl-2">
   
   @include('common.form_submission_error')

   <div class="card card-trans-4">
      
      <div class="card-body">
         <form action="/contact" method="POST">   
            @csrf
            @honeypot

            
{{-- @if((app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'cart') && (Cart::content())) --}}
 @if(request()->has('type') && (request()->type == "quoteRequest"))
   @include('UI.contactForm.fields.cart.subject')
   @include('UI.contactForm.fields.cart.email')
   @include('UI.contactForm.fields.cart.items')
   @include('UI.contactForm.fields.cart.message')
@else
   @include('UI.contactForm.fields.main.subject')
   @include('UI.contactForm.fields.main.email')
   @include('UI.contactForm.fields.main.message')
@endif

            
            

            {{-- @include('common.reCaptcha') --}}

            <div class="text-center">
               <input type="submit" value="Send Message" class="btn btn-sm btn-primary">
            </div>

         </form>
      </div>

      <div class="card-footer p-1">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>

   </div>
</div>
@endsection
