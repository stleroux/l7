@extends('layouts.admin')

@section('pageHeader', 'Permissions')

@section('breadcrumbs')
   <li class="breadcrumb-item active">Permissions</li>
@endsection

@section('content')

   <div class="row">
      @can('permission-create')
         <a href="{{ route('admin.permissions.create') }}" class="btn btn-app bg-success">
            <i class="fas fa-user-tag nav-icon"></i>
            Create Permission
         </a>
      @endcan
   </div>

   <div class="card">
      {{-- <div class="card-header">
         <h3 class="card-title">
            Users
         </h3>
      </div> --}}

      <div class="card-body">
         <table class="table table-hover table-sm" id="datatable">
           <thead>
             <tr>
               <th>#</th>
               <th>Name</th>
               <th class="d-none d-sm-table-cell">Created</th>
               <th class="d-none d-md-table-cell">Updated</th>
               <th class="no-sort">Actions</th>
             </tr>
           </thead>
           <tbody>
            @foreach($permissions as $permission)
             <tr>
               <th>{{ $permission->id }}</th>
               <td>{{ $permission->name }}</td>
               <td class="d-none d-sm-table-cell">{{ $permission->created_at }}</td>
               <td class="d-none d-md-table-cell">{{ $permission->updated_at }}</td>
               <td>
                  @can('permission-edit')
                     <a href="{{ route('admin.permissions.edit', $permission) }}" class="btn btn-sm btn-primary float-left">
                        Edit
                     </a>
                  @endcan

                  @can('permission-delete')
                     <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete"> Delete </button>
                  @endcan
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
      </div>
   </div>

   <!-- DELETE MODAL-->
   <div class="modal modal-danger fade" id="delete" tabindex='-1'>
      <div class="modal-dialog">
         <div class="modal-content bg-danger">
            <div class="modal-header">
               <h4 class="modal-title">Delete Confirmation</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>

            <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST">
               @CSRF
               @method('DELETE')
               
               <div class="modal-body">
                  <input type="hidden" name="permission_id" id="permission_id" value="">
                  <p class="text-center">Are you sure you want to delete this permission?</p>
               </div>

               <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-success" data-dismiss="modal">No - Cancel</button>
                  <button type="submit" class="btn btn-warning">YES - Delete</button>
               </div>
            </form>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- /.modal -->

@endsection

@section('scripts')
   <script>
      $(function () {
         $("#datatable").DataTable({
            // "responsive": true,
            // "autoWidth": false,
            "order": [],
            "columnDefs": [{
               "targets"  : 'no-sort',
               "orderable": false,
            }],
            "pagingType": "full_numbers"
         });
      });
   </script>
@endsection
