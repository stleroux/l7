<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-info">
<?php else: ?>
   <div class="card <?php echo e(($user->account_status ? 'card-info' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header">
      <div class="card-title">Roles</div>
   </div>

   <div class="card-body">
      <!-- ROLES -->
      <div class="form-group">
         <dl class="pl-3">
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="row">
                  <div class="col-6">
                     <?php echo e(ucfirst($role->name)); ?>

                  </div>
                  <div class="col-3">
                     <input
                        class="form-check-input"
                        id="roles"
                        type="checkbox"
                        name="roles[]"
                        value="<?php echo e($role->id); ?>"
                        data-bootstrap-switch
                        data-off-color="danger"
                        data-off-text="Denied"
                        data-on-color="success"
                        data-on-text="Granted"
                        <?php if($user->roles->pluck('id')->contains($role->id)): ?> checked <?php endif; ?>
                     />
                  </div>
                  <div class="col text-right">
                     <i class="far fa-question-circle"
                        data-toggle="tooltip"
                        data-placement="left"
                        title="<?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if(!$loop->last): ?> <?php echo e(ucfirst($permission->name)); ?>, <?php else: ?> <?php echo e(ucfirst($permission->name)); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                     </i>
                  </div>
               </div>
               <hr class="m-1" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </dl>
      </div>
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/fields/roles.blade.php ENDPATH**/ ?>