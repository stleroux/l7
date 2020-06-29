@extends('layouts.admin')

@section('pageHeader')
   <i class="fa fa-sitemap"></i>
   @if(Route::currentRouteName() == 'admin.categories.index')
      Categories
   @else
      Trashed Categories
   @endif
@endsection

@section('stylesheet')
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item active">Categories</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.users.index.sidebar') --}}
@endsection

@section('formStart')
@endsection

@section('formActions')
@endsection

@section('formEnd')
@endsection

@section('content')

   @include('admin.categories.index.topbar')

   <div class="row">

      <div class="col-{{ (Route::currentRouteName() == 'admin.categories.trashed') ? '12' : '8' }}">
         <div class="card">
            <!--CARD BODY-->               
            <div class="card-body">
               @include('admin.categories.index.grid')
            </div>
         </div>
      </div>

      @if(Route::currentRouteName() == 'admin.categories.index')
         <div class="col-4">
            @include('admin.categories.create.category')
            @include('admin.categories.create.subcategory')
            @include('admin.categories.create.parent')
         </div>
      @endif
   </div>

   @include('admin.categories.index.modals.destroy')
   @include('admin.categories.index.modals.mass_destroy')
   @include('admin.categories.index.modals.restore')
   @include('admin.categories.index.modals.mass_restore')
   @include('admin.categories.index.modals.delete')
   @include('admin.categories.index.modals.mass_delete')
   @include('admin.categories.help')

@endsection

@section('scripts')

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
            "pagingType": "full_numbers"
         });
      });
   </script>

   <script>
      $(document).ready(function () { 
         $('#cCategory').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
            //success data
            //console.log(data);
            var subcat =  $('#cSubcategory').empty();
               $.each(data,function(create,subcatObj){
                  var option = $('<option/>', {id:create, value:subcatObj});
                  subcat.append('<option value ="'+subcatObj+'">'+subcatObj+'</option>');
               });
            });
         });
      });
   </script>

   <script>
      function showHide(checked)
      {
         var ischecked =$('input[type=checkbox]:checked:not("#checkbox_all")').length;

         if (ischecked > 0)
         {
            $("#btn_multidestroy").show();
            $("#btn_multidelete").show();
            $("#btn_multirestore").show();
         } else {
            $("#btn_multidestroy").hide();
            $("#btn_multidelete").hide();
            $("#btn_multirestore").hide();
         }
      }
   </script>

   <script>
      $(document).ready(function () {
          // For A Delete Record Popup
          $('.destroy-category').click(function () {
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
          $('.delete-category').click(function () {
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
          $('.restore-category').click(function () {
              var id = $(this).attr('data-id');
              var url = $(this).attr('data-url');

              $("#restoreForm", 'input').val(id);
              $("#restoreForm").attr("action", url);
          });
      });
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
        }

        $(".checkbox_all").click(function(){
            $('input.checkbox_record').prop('checked', this.checked);
            getIDs();
        });

        $('.checkbox_record').change(function() {
            getIDs();
        });
    </script>
   



<!--######################################################################
#######################################################################-->

   <script>
      // This script allows checked values to be passed to multi-destroy modal
      $('#massDestroy-modal').on('show.bs.modal', function(e) {
         var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
         //put the ids in the hidden input as a comma separated string
         $('#mass_destroy_hidden_checkedinput').val(checkedValues.join(','));
      });
   </script>

   <script>
      // This script allows checked values to be passed to multi-delete modal
      $('#massDelete-modal').on('show.bs.modal', function(e) {
         var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
         // put the ids in the hidden input as a comma separated string
         $('#mass_delete_hidden_checkedinput').val(checkedValues.join(','));
      });
   </script>

   <script>
      // This script allows checked values to be passed to multi-restore modal
      $('#massRestore-modal').on('show.bs.modal', function(e) {
         var checkedValues = $('.record:checked').map(function(){ return this.value; }).get();
         // put the ids in the hidden input as a comma separated string
         $('#mass_restore_hidden_checkedinput').val(checkedValues.join(','));
      });
   </script>

@endsection