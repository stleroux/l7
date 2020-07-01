@extends('layouts.admin')

@section('stylesheets')
   {{-- {{ Html::style('/css/woodbarn.css') }} --}}
@endsection

@section('pageHeader')
   <i class="fab fa-pagelines"></i>
   Projects
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item active">Projects</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')
   @include('admin.projects.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD HEADER-->
            <div class="card-header section_header p-2">
               <span class="float-right">
                  <div class="btn-group">
                     {{-- @include('admin.projects.buttons.help', ['size'=>'xs', 'bookmark'=>'projects']) --}}
                     {{-- @include('admin.projects.buttons.BEProjects', ['size'=>'xs']) --}}
                     {{-- @include('admin.projects.finishes.buttons.finishes', ['size'=>'xs']) --}}
                     {{-- @include('admin.projects.materials.buttons.materials', ['size'=>'xs']) --}}
                     {{-- @include('admin.projects.buttons.add', ['size'=>'xs']) --}}
                  </div>
               </span>
            </div>

            <!--CARD BODY-->
            <div class="card-body section_body p-2">
               @if($projects->count() > 0)
                  @include('admin.projects.index.grid')
               @else
                  {{-- {{ setting('no_records_found') }} --}}
               @endif
            </div>
            
         </div>
      </div>
   </div>

   @include('admin.projects.index.modals.destroy')
   @include('admin.projects.index.modals.mass_destroy')
   @include('admin.projects.index.modals.restore')
   @include('admin.projects.index.modals.mass_restore')
   @include('admin.projects.index.modals.delete')
   @include('admin.projects.index.modals.mass_delete')
   @include('admin.projects.help')

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
          $('.destroy-role').click(function () {
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
          $('.delete-role').click(function () {
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
          $('.restore-role').click(function () {
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
