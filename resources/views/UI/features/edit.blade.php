@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.features') }}"></i>
   Edit Requested Feature
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('features.index') }}">Requested Features</a></li>
   <li class="breadcrumb-item">Edit Requested Feature</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

   <form action="{{ route('features.update', $feature) }}" method="POST">
      @csrf
      @method('PUT')

      @include('UI.features.edit.topbar')
      @include('common.form_submission_error')
      @include('UI.features.forms.form')

   </form>
   
   @include('help.index', ['title'=>'Edit Requested Feature', 'icon'=>'features', 'path'=>'UI.features.edit'])

@endsection
