<script>
   function showHide(checked)
   {
      var ischecked =$('input[type=checkbox]:checked:not("#checkbox_all")').length;

      if (ischecked > 0)
      {
         $("#btn_multidestroy").show();
         $("#btn_multidelete").show();
         $("#btn_multirestore").show();
         $("#btn_multiresetViews").show();
         $("#btn_multipublish").show();
         $("#btn_multiunpublish").show();
      } else {
         $("#btn_multidestroy").hide();
         $("#btn_multidelete").hide();
         $("#btn_multirestore").hide();
         $("#btn_multiresetviews").hide();
         $("#btn_multipublish").hide();
         $("#btn_multiunpublish").hide();
      }
   }
</script>

<!-- Select multiple rows using checkboxes -->
<script>
   $(".checkbox_all").click(function(){
      $('input.checkbox_record').prop('checked', this.checked);
   });
</script>

<script>
   function getIDs()
   {
      var ids = [];
      $('.checkbox_record').each(function () {
         if($(this).is(":checked")) {
            ids.push($(this).val());
         }
      });

      $('#mass_destroy_ids').val(ids.join());
      $('#mass_delete_ids').val(ids.join());
      $('#mass_restore_ids').val(ids.join());
      $('#mass_resetViews_ids').val(ids.join());
      $('#mass_publish_ids').val(ids.join());
      $('#mass_unpublish_ids').val(ids.join());
   }

   $(".checkbox_all").click(function(){
      $('input.checkbox_record').prop('checked', this.checked);
      getIDs();
   });

   $('.checkbox_record').change(function() {
      getIDs();
   });
</script>
