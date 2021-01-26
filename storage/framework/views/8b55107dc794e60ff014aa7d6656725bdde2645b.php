<!-- Scripts -->
<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!-- Toastr -->
<script src="<?php echo e(asset('plugins/toastr/toastr.min.js')); ?>"></script>

<!-- Select2 -->
<script src="<?php echo e(asset('plugins/select2/js/select2.full.min.js')); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>

<!-- ChartsJS -->


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0"></script>
 <!-- Charting library -->
 <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
 <!-- Chartisan -->
 <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>


<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>

<!-- Input Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<?php echo $__env->make('scripts.inputMask', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Bootstrap-Switch -->
<script src="<?php echo e(asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
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

<?php echo $__env->make('scripts.datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.tinyMCE', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.showHideMassButtons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.massModals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
   <?php if(Session::has('message')): ?>
   var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
   
   switch(type){
      case 'info':
      toastr.info("<?php echo e(Session::get('message')); ?>");
      break;

      case 'warning':
      toastr.warning("<?php echo e(Session::get('message')); ?>");
      break;

      case 'success':
      toastr.success("<?php echo e(Session::get('message')); ?>");
      break;

      case 'error':
      toastr.error("<?php echo e(Session::get('message')); ?>");
      break;
   }
   <?php endif; ?>
</script>

<?php echo $__env->yieldContent('scripts'); ?>

<script src="<?php echo e(asset('/js/app.js')); ?>"></script>


<?php echo \Livewire\Livewire::scripts(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/common/scripts.blade.php ENDPATH**/ ?>