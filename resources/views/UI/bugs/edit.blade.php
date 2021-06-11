@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.bugs') }}"></i>
   Edit Bug Report
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('bugs.index') }}">Bug Reports</a></li>
   <li class="breadcrumb-item">Edit Bug Report</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

   <form action="{{ route('bugs.update', $bug) }}" method="POST">
      @csrf
      @method('PUT')

      @include('UI.bugs.edit.topbar')
      @include('common.form_submission_error')
      @include('UI.bugs.forms.form')

   </form>

   @include('help.index', ['title'=>'Edit Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.edit'])

@endsection
