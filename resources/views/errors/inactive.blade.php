@extends('layouts.UI.app-10')

@section('title','Unauthorized Access')

@section ('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('sectionSidebar')
  {{-- @include('backend.projects.sidebar') --}}
@endsection

{{-- @section('breadcrumb') --}}
	{{-- <li><a href="/">Home</a></li> --}}
{{-- @endsection --}}

@section('content')

	<div class="alert alert-danger">
		Module not currently active		
	</div>
	
@endsection
