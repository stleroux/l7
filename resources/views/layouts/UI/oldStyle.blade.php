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
   <!-- Font Awesome -->
   <link rel="stylesheet" href="/css/fontawesome/all.css"><!--load all styles 5.9.0-->
   {{-- <link rel="stylesheet" href="{{ asset('css/UI/__slate_b431.css') }}"> --}}
   <link rel="stylesheet" href="{{ asset('css/UI/__bootstrap.css') }}">
   <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
   <link rel="stylesheet" href="{{ asset('css/common.bootstrap-colors.css') }}" />
   {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
   @yield('stylesheets')
</head>
<body>
	<div id="app">
      
@if(app()->environment('production'))
   <nav class="navbar navbar-expand-sm sticky-top my-0 mx-0 py-0 pl-2 pr-0 navbar-dark bg-dark">
@else
   <nav class="navbar navbar-expand-sm sticky-top my-0 mx-0 py-0 pl-2 pr-0 navbar-danger bg-danger">
@endif

   <a class="navbar-brand m-0 p-0" href="/">
      <h4 class="my-0 mx-0 py-0 px-0">{{ Config::get('settings.app_name') }}</h4>
   </a>
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {{-- Left side --}}
      @include('layouts.UI.navbar.left.navbarLeft')

      {{-- Center --}}
      @include('layouts.UI.navbar.center.navbarCenter')

      {{-- Right Side --}}
      @include('layouts.UI.navbar.right.navbarRight')
   </div>

</nav>

   	<main class="container-fluid">
   		{{-- <div id="" class="py-0 px-0"> --}}
   			<div class="row py-0 px-0">
   				<div class="col-sm-12 col-md-2 px-sm-0 px-md-1 mb-2">
                  {{-- @include('blocks.sessions') --}}
                  @include('UI.blocks.menu.main')
                  @include('admin.blocks.menu.admin')
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
   		{{-- </div> --}}
   	</main>
   		
   	<footer class="footer">
   		@include('layouts.UI.common.footer')
   	</footer>
   </div>

<!-- Scripts -->
   
   <!-- Script -->
   <script src="{{ asset('js/app.js') }}"></script>
	<!-- Optional JavaScript -->
   {{-- @include('scripts.alertTimeout') --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

   @include('scripts.datatables')
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
