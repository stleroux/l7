@extends('layouts.admin')

@section('pageHeader', 'ADMIN DASHBOARD')

@section('breadcrumbs')
   {{-- <li class="breadcrumb-item"><a href="#">Layout</a></li> --}}
   {{-- <li class="breadcrumb-item active">123 Fixed Navbar Layout</li> --}}
@endsection

@section('content')
   @include('admin.dashboard.infoBoxes')
@endsection
