<!-- Scripts -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- SweetAlert2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<!-- ChartsJS -->
{{-- <script src="{{ asset('plugins/charts.js/Chart.js') }}"></script> --}}
{{-- <script src="../../plugins/Chart.js/Chart.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0"></script>
 <!-- Charting library -->
 <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
 <!-- Chartisan -->
 <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>


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

<!-- DateTime Picker -->
<script type="text/javascript" src="/js/jquery.datetimepicker.full.min.js"></script>
<script>
   $("#datePicker").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>

@include('scripts.datatables')
@include('scripts.tinyMCE')
@include('scripts.showHideMassButtons')
@include('scripts.massModals')
@include('scripts.tooltipPopper')

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

{{-- @livewireScripts --}}
<livewire:scripts>

{{-- <script src="http://unpkg.com/turbolinks"></script> --}}
