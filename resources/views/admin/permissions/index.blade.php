@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   Permissions
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item active">Permissions</li>
@endsection

@section('rightSidebar')
   @include('admin.permissions.index.sidebar')
@endsection

@section('content')

   @include('admin.permissions.index.topbar')

   <div class="row">
      <div class="col-{{ (Gate::allows('permission-create')?'8':'12') }}">
         <div class="card">
            <div class="card-body">
               @include('admin.permissions.index.grid')
            </div>
         </div>
      </div>

      <div class="col-4">
         @include('admin.permissions.create.single')
         @include('admin.permissions.create.multiple')
      </div>
   
   @include('admin.permissions.index.modals.destroy')
   @include('admin.permissions.index.modals.mass_destroy')
   @include('admin.permissions.help')

@endsection

@section('scripts')

   <script>
      function showHide(checked)
      {
         var ischecked =$('input[type=checkbox]:checked:not("#checkbox_all")').length;

         if (ischecked > 0)
         {
            $("#btn_multidestroy").show();
         } else {
            $("#btn_multidestroy").hide();
         }
      }
   </script>

   <script>
      $(document).ready(function () {
         // Start DataTable
         var table = $('#datatable').DataTable({
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
          $('.destroy-permission').click(function () {
              var id = $(this).attr('data-id');
              var url = $(this).attr('data-url');

              $("#destroyForm", 'input').val(id);
              $("#destroyForm").attr("action", url);
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

   <!-- Needed in Permissions Index to allow dynamically adding row to the Multiple permissions section -->
   <script type="text/javascript">
      $('.addRow').on('click', function(){
         addRow();
      });

      function addRow(){
         // alert('test');
         var tr = '<tr>'+
                     '<td>'+
                        '<input type="text" name="permName[]" class="form-control form-control-sm" placeholder="Permission Name">'+
                        '<div class="pl-1 bg-danger">{{ $errors->first('permName') }}</div>'+
                     '</td>'+
                     '<td><input type="text" name="permDescription[]" class="form-control form-control-sm"></td>'+
                     '<td class="text-center"><a href="#" class="btn btn-sm btn-danger remove"><i class="far fa-minus-square"></i></a></td>'+
                  '</tr>';

               $('#permissions').append(tr);
      };

      $('tbody').on('click', '.remove', function(){
         $(this).parent().parent().remove();
      });

   </script>

@endsection
