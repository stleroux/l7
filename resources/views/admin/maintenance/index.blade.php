@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader', 'SITE MAINTENANCE')

@section('breadcrumb')
@endsection

@section('content')

   <div class="container-fluid m-0 p-0">
      
      <div class="row">
         <div class="col">
            <div class="alert alert-danger">
               Deleting the data cannot be undone. Only proceed if you are ABSOLUTELY sure you know what you are doing.
            </div>
         </div>
      </div>
      
      <div class="row">
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Darts</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearDartsData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete Darts Data"
                              class="btn btn-md btn-danger text-warning font-weight-bold"
                              onclick="return confirm('Are you sure you want to delete ALL Darts data from the system?\nThis action cannot be undone.');"
                           />
                        </form>                        
                     </div>
                     <div class="col">
                        This will delete ALL data in :<br />
                        - Dart Games<br />
                        - Dart Players<br />
                        - Dart Scores
                     </div>
                  </div>
               </div>
               <div class="card-footer text-danger font-weight-bold">Proceed with caution</div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Invoicer</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearInvoicerData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete Invoicer Data"
                              class="btn btn-md btn-danger text-warning font-weight-bold"
                              onclick="return confirm('Are you sure you want to delete ALL Invoicer data from the system?\nThis action cannot be undone.');"
                           />
                        </form>                        
                     </div>
                     <div class="col">
                        This will delete ALL data in :<br />
                        - Invoices<br />
                        - Invoices Items<br />
                        - invoices Activities
                     </div>
                  </div>
               </div>
               <div class="card-footer text-danger font-weight-bold">Proceed with caution</div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">System Data</div>
               </div>
               <div class="card-body">
                  <div class="row pb-2">
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearAuditLogsData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete Audit Logs"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL Audit logs from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearSystemLogsData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete System Logs"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL System logs from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                  </div>
                  <div class="row pb-2">
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearNotificationsData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete Notifications Data"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL Notifications data from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                     <div class="col">
                        <form action="{{ route('admin.maintenance.clearViewsLogsData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete Views Logs"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL Views logs from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                  </div>
                  <div class="row pb-2">
                     <div class="col text-center">
                        <form action="{{ route('admin.maintenance.clearAllSystemData') }}" method="POST">
                           @csrf
                           <input
                              type="submit"
                              value="Delete All System Data Logs"
                              class="btn btn-md btn-danger"
                              onclick="return confirm('Are you sure you want to delete ALL System Data logs from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                  </div>
               </div>
               <div class="card-footer text-danger font-weight-bold">Proceed with caution</div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-2">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Tools</div>
               </div>
               <div class="card-body">
                  <a href="/adminer" class="btn btn-sm btn-block btn-outline-primary" target="_blank">Manage Database</a>
               </div>
            </div>
         </div>
      </div>
      
      
   </div>


{{-- <script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          // var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script> --}}

@endsection
