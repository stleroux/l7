      
      <?php if(!$permission->deleted_at): ?>
         
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-edit')): ?>
            
            
            <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'permission', 'model'=>$permission], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php endif; ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-delete')): ?>

            
            <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'permission', 'model'=>$permission], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php endif; ?>

      <?php endif; ?>

      <?php if($permission->deleted_at): ?>

         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-manage')): ?>

            

            

            <!-- CANNOT use a link here, must use a button -->
            
            <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'permission', 'model'=>$permission], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'permission', 'model'=>$permission], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
         <?php endif; ?>

      <?php endif; ?>
   </div>

</div><?php /**PATH C:\sites\l7\resources\views/admin/permissions/index/actions.blade.php ENDPATH**/ ?>