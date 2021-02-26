<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-create')): ?>
   <form action="<?php echo e(route('admin.permissions.storeBread')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">

         <div class="card-header">
            <div class="card-title">Add Model Permissions (BREAD)</div>
            <div class="float-right">
               <?php echo $__env->make('admin.permissions.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.actions.common.save', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         
         
         <div class="card-body pt-2">

            <div class="row">
               <?php echo $__env->make('admin.permissions.forms.fields.modelName', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            

         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <i class="fa fa-star" style="color:#ff0000" aria-hidden="true"></i> are required</div>
         </div>
         
      </div>
   </form>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/create/bread.blade.php ENDPATH**/ ?>