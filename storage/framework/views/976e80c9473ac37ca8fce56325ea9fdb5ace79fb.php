<?php if(Route::currentRouteName('') != 'admin.recipes.trashed'): ?>

   <?php if(!$recipe->deleted_at): ?>
      
      <?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')): ?>
         
         <a href="<?php echo e(route('admin.recipes.edit', $recipe)); ?>" class="btn btn-sm btn-default" title="Edit Recipe">
            <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
            
         </a>
         
         
            <?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish')): ?>
               <?php if($recipe->published_at): ?>
                  <button type="button"
                     class="unpublish-model btn btn-sm btn-default"
                     data-toggle="modal"
                     data-target="#unpublishModal"
                     data-id="<?php echo e($recipe->id); ?>"
                     data-url="<?php echo e(url('admin/recipes/unpublish', $recipe)); ?>"
                     title="Unpublish Recipe"
                     >
                     <i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
                     
                  </button>
               <?php else: ?>
                  <button type="button"
                     class="publish-model btn btn-sm btn-default"
                     data-toggle="modal"
                     data-target="#publishModal"
                     data-id="<?php echo e($recipe->id); ?>"
                     data-url="<?php echo e(url('admin/recipes/publish', $recipe)); ?>"
                     title="Publish Recipe"
                     >
                     <i class="<?php echo e(config('icons.publish')); ?>"></i>
                     
                  </button>
               <?php endif; ?>
            <?php endif; ?>
         

         <button type="button"
            class="resetViews-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#resetViewsModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes/resetViews', $recipe)); ?>"
            title="Reset Views Count"
            >
            <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
            
         </button>

      <?php endif; ?>

      
      <?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')): ?>
         <button type="button"
            class="destroy-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#destroyModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes', $recipe)); ?>"
            title="Trash Recipe"
            >
            <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
            
         </button>
      <?php endif; ?>
      
   <?php endif; ?>

<?php else: ?>

   <?php if($recipe->deleted_at): ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-edit')): ?>
         

         

         <button type="button"
            class="restore-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#restoreModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes/restore', $recipe)); ?>"
            title="Restore Recipe"
            >
            <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
            
         </button>

         <!-- CANNOT use a link here, must use a button -->

         <button type="button"
            class="delete-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#deleteModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes/delete', $recipe)); ?>"
            title="Permanently Delete Recipe"
            >
            <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
            
         </button>
      <?php endif; ?>
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions.blade.php ENDPATH**/ ?>