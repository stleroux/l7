
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>{{ Config::get('settings.appName') }}</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   {{-- <link rel="icon" href="{{ URL::asset('/images/14-1.jpg') }}" type="image/x-icon"/> --}}

   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">

   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

   <!-- Toastr -->
   <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">

   <!-- Select2 -->
   <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

   <!-- ChartsJS -->
   {{-- <link rel="stylesheet" href="{{ asset('plugins/charts.js/Chart.css') }}"> --}}
   

   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

   <!-- Theme style -->
   {{-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> --}}
   <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
   {{-- <link rel="stylesheet" href="{{ asset('css/UI/__bootstrap.css') }}"> --}}
   {{-- <link rel="stylesheet" href="{{ asset('css/old/__slate_b431.css') }}"> --}}

   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <!-- Allow for floating labels -->
   {{-- <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css"/> --}}

   <!-- DateTime Picker -->
   <link rel="stylesheet" href="{{ Asset('css/common/jquery.datetimepicker.min.css') }}">
   
   <!-- Custom stylesheets -->
   <link rel="stylesheet" href="{{ asset('css/common/bootstrap-colors.css') }}">
   <link rel="stylesheet" href="{{ asset('css/common/styles.css') }}">
   <link rel="stylesheet" href="{{ asset('css/common/print.css') }}">

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

   @yield('stylesheet')

   @livewireStyles
   {{-- <livewire:styles> --}}
