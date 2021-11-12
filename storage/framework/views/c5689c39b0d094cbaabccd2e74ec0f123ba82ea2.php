

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader', 'SITE MAINTENANCE'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
                        <form action="<?php echo e(route('admin.maintenance.clearDartsData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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
                        <form action="<?php echo e(route('admin.maintenance.clearInvoicerData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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
                        <form action="<?php echo e(route('admin.maintenance.clearAuditLogsData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
                           <input
                              type="submit"
                              value="Delete Audit Logs"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL Audit logs from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                     <div class="col">
                        <form action="<?php echo e(route('admin.maintenance.clearSystemLogsData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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
                        <form action="<?php echo e(route('admin.maintenance.clearNotificationsData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
                           <input
                              type="submit"
                              value="Delete Notifications Data"
                              class="btn btn-md btn-warning"
                              onclick="return confirm('Are you sure you want to delete ALL Notifications data from the system?\nThis action cannot be undone.');"
                           />
                        </form>
                     </div>
                     <div class="col">
                        <form action="<?php echo e(route('admin.maintenance.clearViewsLogsData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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
                        <form action="<?php echo e(route('admin.maintenance.clearAllSystemData')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/maintenance/index.blade.php ENDPATH**/ ?>