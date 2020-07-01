@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   @if(Route::currentRouteName('') == 'admin.users.trashed')
      Trashed Users
   @else
      Users
   @endif
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item active">Users</li>
@endsection

@section('rightSidebar')
   @include('admin.users.index.sidebar')
@endsection

@section('content')

   @include('admin.users.index.topbar')

   <div class="card">
      {{-- <div class="card-header">
         <h3 class="card-title">
            Users
         </h3>
      </div> --}}

      <div class="card-body">
         @include('admin.users.index.grid')
      </div>
   </div>
   
   @include('admin.users.index.modals.destroy')
   @include('admin.users.index.modals.mass_destroy')
   @include('admin.users.index.modals.restore')
   @include('admin.users.index.modals.mass_restore')
   @include('admin.users.index.modals.delete')
   @include('admin.users.index.modals.mass_delete')
   @include('admin.users.help')

@endsection

@section('scripts')

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
          // For A Delete Record Popup
          $('.destroy-user').click(function () {
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
          $('.delete-user').click(function () {
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
          $('.restore-user').click(function () {
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

@endsection