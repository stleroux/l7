<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-create')): ?>
   <form action="<?php echo e(route('admin.permissions.storeMultiple')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Model Permissions</div>
            <div class="float-right">
               <?php echo $__env->make('admin.permissions.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.actions.common.save', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         
         
         
         <div class="card-body pt-2">

            <div class="row">
               <?php echo $__env->make('admin.permissions.forms.fields.modelName', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="row">
               <div class="col">
                  <table class="table table-sm" id="permissions">
                     <thead>
                        <tr>
                           <th class="required">Permission Name</th>
                           <th>Permission Description</th>
                           <th class="text-center">
                              <a href="#" class="btn btn-sm btn-info addRow">
                                 <i class="far fa-plus-square"></i>
                              </a>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         
         <?php if(Route::currentRouteName('') != 'admin.permissions.show'): ?>
            <div class="card-footer p-1">
               <?php echo Config::get('settings.formFieldsRequired'); ?>

            </div>
         <?php endif; ?>
         
      </div>
   </form>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/permissions/create/multiple.blade.php ENDPATH**/ ?>