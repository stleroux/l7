@extends('layouts.UI.app-10')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection 

@section('pageHeader')
   Edit Profile
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Edit Profile</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.member') --}}
   @include('UI.profile.blocks.contributions')
@endsection

@section('content')

   <form action="{{ route('profile.update', Auth::user()) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="card card-trans-2 mb-3">
      
         @include('UI.profile.edit.topbar')

         <div class="card-body p-2">
            
            <div class="form-row">
               <div class="col-xl-9">
                  @include('UI.profile.edit.general')
                  @include('UI.profile.edit.address')
                  @include('UI.profile.edit.other')                  
               </div>

               <div class="col-xl-3">
                  @include('UI.profile.edit.image')
                  @include('UI.profile.edit.account')
               </div>
            </div>

         </div>

         <!-- CARD FOOTER -->
         <div class="card-footer pt-1 pb-1 pl-2">
            Fields marked with an <span class="required"></span> are required
         </div>
         
      </div>

   {{-- {{ Form::close() }} --}}
   </form>

@include('UI.profile.edit.help')

@endsection
