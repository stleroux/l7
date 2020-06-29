@extends('layouts.admin')

@section('pageHeader', 'Edit Project')

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('formStart')
   <form action="{{ route('admin.projects.update', $project) }}" method="POST">
      @csrf
      @method('PUT')
@endsection

@section('formActions')
   @include('admin.projects.edit.topbar')
@endsection

@section('formEnd')
   </form>
@endsection

@section('content')
@endsection

