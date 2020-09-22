@extends('layouts.UI.app-10')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection 

@section('pageHeader')
   Show Profile
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Show Profile</li>
@endsection

@section('right_column')
   {{-- @include('UI.blocks.member') --}}
   @include('UI.profile.blocks.contributions')
@endsection

@section('content')

{{--    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT') --}}

   @include('common.messages')

      <div class="card card-trans-0 mb-3">
      
         {{-- @include('UI.profile.show.topbar') --}}

         <div class="card-body p-2">
            
            <div class="form-row">
               <div class="col-xl-9">
                  @include('UI.profile.show.general')
                  @include('UI.profile.show.address')
                  @include('UI.profile.show.other')                  
               </div>

               <div class="col-xl-3">
                  @include('UI.profile.show.image')
                  @include('UI.profile.show.account')
               </div>
            </div>

         </div>

         <!-- CARD FOOTER -->
         {{-- <div class="card-footer pt-1 pb-1 pl-2">
            Fields marked with an <span class="required"></span> are required
         </div> --}}
         
      </div>

   {{-- {{ Form::close() }} --}}
   {{-- </form> --}}

@include('UI.profile.show.help')

@endsection