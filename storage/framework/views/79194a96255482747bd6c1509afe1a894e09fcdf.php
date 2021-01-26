<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-create')): ?>
   <form action="<?php echo e(route('admin.permissions.storeSingle')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="part" value="single" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Permission</div>
            <div class="float-right">
               
               <?php echo $__env->make('admin.permissions.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.actions.common.save', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         
         <div class="card-body pt-2">

            <div class="row">
               <?php echo $__env->make('admin.permissions.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.forms.fields.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            
         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/create/single.blade.php ENDPATH**/ ?>