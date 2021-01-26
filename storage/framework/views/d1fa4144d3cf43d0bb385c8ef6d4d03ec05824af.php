<script>
   $(document).ready(function () {
      // Start DataTable
      var table = $('#datatable').DataTable({
         // "responsive": true,
         // "autoWidth": false,
         "stateSave": true,
         "order": [],
         "columnDefs": [{
            "targets"  : 'no-sort',
            "orderable": false,
         }],
         "pagingType": "full_numbers",
         "drawCallback": function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm');
         }
      });
   });
</script><?php /**PATH /home/lerouxs/sites/l7/resources/views/scripts/datatables.blade.php ENDPATH**/ ?>