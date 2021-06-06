<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'TheWoodBarn.ca') }}</title>

   <!-- Styles -->
   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
   <link rel="stylesheet" href="{{ asset('css/common/jquery.datetimepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/common/bootstrap-colors.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/UI/slate_b431.css') }}">
   <link rel="stylesheet" href="{{ asset('css/UI/styles.css') }}">
   <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css"/>
   @yield('stylesheets')
</head>
<body>
	<div id="app">
      
      @include('layouts.UI.navbar.navbar')
      @include('layouts.UI.messages')

   	<main class="container-fluid">
			<div class="row py-0 px-0">
				<div class="col-sm-12 col-md-2 px-sm-0 px-md-1 mb-2">
               @include('UI.blocks.sessions')
               @include('UI.blocks.menu.main')
               {{-- @include('admin.blocks.menu.admin') --}}
					@yield('left_column')
				</div>
				<div class="col-sm-12 col-md-8 py-0 px-sm-0 px-md-1 mb-2">
               {{-- <example-component></example-component> --}}
					@yield('content')
				</div>
				<div class="col-sm-12 col-md-2 px-sm-1 mb-2">
					@yield('right_column')
				</div>
			</div>
   	</main>
   		
   	<footer class="footer">
   		@include('layouts.UI.footer')
   	</footer>
   </div>

<!-- Scripts -->
   
   <!-- Script -->
   <script src="{{ asset('js/UI/app.js') }}"></script>
	<!-- Optional JavaScript -->
   {{-- @include('scripts.alertTimeout') --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

   {{-- @include('scripts.datatables') --}}
   {{-- @include('scripts.bulkButtons') --}}
   {{-- @include('scripts.dateTimePicker') --}}
   {{-- @include('scripts.tinyMCE') --}}
	
	{{-- <script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script> --}}

   @yield('scripts')
	
</body>
</html>
