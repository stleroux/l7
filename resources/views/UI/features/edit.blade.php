@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
      Edit Feature Request
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('features.index') }}">Feature Requests</a></li>
   <li class="breadcrumb-item">Edit Feature Request</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

   <form action="{{ route('features.update', $feature) }}" method="POST">
      @csrf
      @method('PUT')

      @include('UI.features.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-trans-4">

               <div class="card-body p-2">

                  <div class="row">
                     <div class="col">
                        @include('UI.features.edit.title', ['required'=>'required'])
                     </div>
                  </div>

                  <div class="row">
                     <div class="col">
                        @include('UI.features.edit.description', ['required'=>'required'])
                     </div>
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

      @include('UI.features.help')

   </form>

@endsection
