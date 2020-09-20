<script>

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// DESTROY
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.destroy-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#destroyForm", 'input').val(id);
         $("#destroyForm").attr("action", url);
      });
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS DESTROY
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   {{-- This script allows checked values to be passed to multi-destroy modal  --}}
   $('#massDestroy-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_destroy_hidden_checkedinput').val(checkedValues.join(','));
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// DELETE
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.delete-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#deleteForm", 'input').val(id);
         $("#deleteForm").attr("action", url);
      });
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS DELETE
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   {{-- This script allows checked values to be passed to multi-delete modal  --}}
   $('#massDelete-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_delete_hidden_checkedinput').val(checkedValues.join(','));
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// RESTORE
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.restore-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#restoreForm", 'input').val(id);
         $("#restoreForm").attr("action", url);
      });
   });

   $('#restore-modal').on('show', function(e) {
      modal.find("#id").val(id);
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS RESTORE
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   {{-- This script allows checked values to be passed to multi-restore modal  --}}
   $('#massRestore-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_restore_hidden_checkedinput').val(checkedValues.join(','));
      });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// PUBLISH
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.publish-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#publishForm", 'input').val(id);
         $("#publishForm").attr("action", url);
      });
   });

   $('#publish-modal').on('show', function(e) {
      modal.find("#id").val(id);
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS PUBLISH
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   {{-- This script allows checked values to be passed to multi-restore modal  --}}
   $('#massPublish-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_publish_hidden_checkedinput').val(checkedValues.join(','));
      });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// UNPUBLISH
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.unpublish-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#unpublishForm", 'input').val(id);
         $("#unpublishForm").attr("action", url);
      });
   });

   $('#unpublish-modal').on('show', function(e) {
      modal.find("#id").val(id);
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS UNPUBLISH
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   // $(document).ready(function () {
   //    // For A Delete Record Popup
   //    $('.massUnpublish-model').click(function () {
   //       var id = $(this).attr('data-id');
   //       var url = $(this).attr('data-url');

   //       $("#massUnpublishForm", 'input').val(id);
   //       $("#massUnpublishForm").attr("action", url);
   //    });
   // });

   {{-- This script allows checked values to be passed to multi-restore modal  --}}
   $('#massUnpublish-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_unpublish_hidden_checkedinput').val(checkedValues.join(','));
      });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// RESET VIEWS
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   $(document).ready(function () {
      // For A Delete Record Popup
      $('.resetViews-model').click(function () {
         var id = $(this).attr('data-id');
         var url = $(this).attr('data-url');

         $("#resetViewsForm", 'input').val(id);
         $("#resetViewsForm").attr("action", url);
      });
   });

   $('#resetViews-modal').on('show', function(e) {
      modal.find("#id").val(id);
   });

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// MASS RESET VIEWS
/////////////////////////////////////////////////////////////////////////////////////////////////////////
   {{-- This script allows checked values to be passed to multi-restore modal  --}}
   $('#massResetViews-modal').on('show.bs.modal', function(e) {
      var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
      //put the ids in the hidden input as a comma separated string
      $('#mass_resetViews_hidden_checkedinput').val(checkedValues.join(','));
      });







</script>
