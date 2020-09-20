<script>
   $(function () {
      $("#selectall").click(function () {
         if ($("#selectall").is(':checked')) {
            $("input[type=checkbox]").each(function () {
               $(this).attr("checked", true);
            });
            $("#bulk-trash").show();
            $("#bulk-delete").show();
            $("#bulk-restore").show();
            $("#bulk-resetViews").show();
            $("#bulk-unpublish").show();
            $("#bulk-publish").show();
            $(".selectmenu").hide();
         }
         else
         {
            $("input[type=checkbox]").each(function () {
               $(this).attr("checked", false);
            });
            $("#bulk-trash").hide();
            $("#bulk-delete").hide();
            $("#bulk-restore").hide();
            $("#bulk-resetViews").hide();
            $("#bulk-unpublish").hide();
            $("#bulk-publish").hide();
            $(".selectmenu").show();
         }
      });
   });

   function checkbox_is_checked() {

      if ($(".check-all:checked").length > 0)
      {
         $("#bulk-trash").show();
         $("#bulk-delete").show();
         $("#bulk-restore").show();
         $("#bulk-resetViews").show();
         $("#bulk-unpublish").show();
         $("#bulk-publish").show();
         $(".selectmenu").hide();
      }
      else
      {
         $("#bulk-trash").hide();
         $("#bulk-delete").hide();
         $("#bulk-restore").hide();
         $("#bulk-resetViews").hide();
         $("#bulk-unpublish").hide();
         $("#bulk-publish").hide();
         $(".selectmenu").show();
      }
   };
</script>