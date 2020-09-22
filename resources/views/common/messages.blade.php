@if ($message = Session::get('primary'))
	<div class="alert alert-primary" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

@elseif ($message = Session::get('secondary'))
	<div class="alert alert-secondary" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

@elseif ($message = Session::get('success'))
	<div class="alert alert-success" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

@elseif ($message = Session::get('danger'))
	<div class="alert alert-danger" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

@elseif ($message = Session::get('warning'))
	<div class="alert alert-warning" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

@elseif ($message = Session::get('info'))
	<div class="alert alert-info" id="success-alert">{{ $message }}</div>
	{{-- <div class="py-0" id="success-empty"><br /></div> --}}

{{-- @elseif ($errors->any())
	@foreach ($errors->all() as $error)
		<div class="bg-danger text-dark py-0" id="success-alert">{{ $error }}</div>
		<div class="py-0" id="success-empty"><br /></div>
	@endforeach --}}

{{-- @else
	<div class="px-0 mx-0"><br /></div> --}}
@endif