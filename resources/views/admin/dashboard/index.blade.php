@extends('layouts.admin.admin')

@section('stylesheet')
{{-- <style>
.cover {
  object-fit: cover;
  /*width: 50px;*/
  /*height: 100px;*/
}
</style> --}}
@endsection

@section('pageHeader', 'DASHBOARD')

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="#">Layout</a></li> --}}
   {{-- <li class="breadcrumb-item active">123 Fixed Navbar Layout</li> --}}
@endsection

@section('content')

	<div class="row">
		<div class="col-xl-10">
			<div class="card">
				<div class="card-body">
					Content will go here
				</div>				
			</div>
		</div>
		<div class="col-xl-2">
			{{-- <div class="card"> --}}
				{{-- <div class="card-body"> --}}
					@include('admin.dashboard.infoBoxes.permissions')
					@include('admin.dashboard.infoBoxes.projects')
					@include('admin.dashboard.infoBoxes.recipes')
					@include('admin.dashboard.infoBoxes.roles')
					@include('admin.dashboard.infoBoxes.users')
				{{-- </div> --}}
			{{-- </div> --}}
		</div>
	</div>

@endsection
