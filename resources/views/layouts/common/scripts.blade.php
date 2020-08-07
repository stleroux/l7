<!-- Scripts -->
      <!-- jQuery -->
      <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

      <!-- Bootstrap 4 -->
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- SweetAlert2 -->
      <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

      <!-- Toastr -->
      <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

      <!-- AdminLTE App -->
      <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

      <!-- DataTables -->
      <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
      <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

      <!-- Input Mask -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
      @include('scripts.inputMask')

      <!-- Bootstrap-Switch -->
      <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
      <script>
         $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
         });
      </script>


      @include('scripts.datatables')
      @include('scripts.showHideMassButtons')
      @include('scripts.massModals')

      <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type', 'info') }}";
         
         switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
         }
         @endif
      </script>

      @yield('scripts')
      
      <script src="{{ asset('/js/app.js') }}"></script>
