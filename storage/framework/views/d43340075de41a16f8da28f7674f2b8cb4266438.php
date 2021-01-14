<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
         <a href="<?php echo e(route('admin.recipes.create')); ?>" class="btn btn-block btn-outline-success">
            <i class="<?php echo e(config('icons.add')); ?>"></i>
            <div class="d-none d-lg-inline">
               Create Recipe
            </div>
         </a>
      <?php endif; ?>

      <?php if(Route::currentRouteName() != 'admin.recipes.trashed'): ?>
         <form action="<?php echo e(route('admin.recipes.mass_destroy')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="<?php echo e(config('icons.trash')); ?>"></i>
               Trash Selected Recipes
            </a>
         </form>
         <form action="" method="POST" class="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multipublish"
               style="display:none"
               data-target="#massPublish-modal">
               <i class="<?php echo e(config('icons.publish')); ?>"></i>
               Publish Selected
            </a>
         </form>
         <form action="<?php echo e(route('admin.recipes.mass_unpublish')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="<?php echo e(config('icons.unpublish')); ?>"></i>
               Unpublish Selected
            </a>
         </form>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.recipes.trashed'): ?>
         <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-outline-primary mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="<?php echo e(config('icons.restore')); ?>"></i>
               Restore Selected Recipes
            </a>
         </form>

         
         <form method="POST">
            <?php echo csrf_field(); ?>
            
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="<?php echo e(config('icons.delete')); ?>"></i>
               Delete Selected Recipes 123
            </a>
         </form>





         



      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/sections/functions/actions.blade.php ENDPATH**/ ?>