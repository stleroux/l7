<script>
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.destroy-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#destroyForm", 'input').val(id);
         $("#destroyForm").attr("action", url);
      });
   });
</script>

<script>
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.delete-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#deleteForm", 'input').val(id);
         $("#deleteForm").attr("action", url);
      });
   });
</script>

<script>
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.restore-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#restoreForm", 'input').val(id);
         $("#restoreForm").attr("action", url);
      });
   });
</script>

<script>
   {{-- This script allows checked values to be passed to multi-destroy modal  --}}
   $('#massDestroy-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_destroy_hidden_checkedinput').val(checkedValues.join(','));
   });
</script>

<script>
   {{-- This script allows checked values to be passed to multi-delete modal  --}}
   $('#massDelete-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_delete_hidden_checkedinput').val(checkedValues.join(','));
   });
</script>

<script>
   {{-- This script allows checked values to be passed to multi-restore modal  --}}
   $('#massRestore-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_restore_hidden_checkedinput').val(checkedValues.join(','));
      });
</script>
