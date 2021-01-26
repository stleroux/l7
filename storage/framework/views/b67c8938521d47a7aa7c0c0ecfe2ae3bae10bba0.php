<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

   	<?php if(Route::currentRouteName() == 'admin.permissions.index'): ?>

         <form action="<?php echo e(route('admin.permissions.mass_destroy')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="<?php echo e(config('icons.trash')); ?>"></i>
               Trash Selected
            </a>
         </form>

      <?php endif; ?>
         
      <?php if(Route::currentRouteName() == 'admin.permissions.trashed'): ?>

         <form action="" method="POST" class="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-block btn-outline-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="fas fa-trash-restore"></i>
               Restore Selected
            </a>
         </form>

         <form action="<?php echo e(route('admin.permissions.mass_delete')); ?>" method="post" class="mt-2">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="fas fa-trash nav-icon"></i>
               Delete Selected
            </a>
         </form>

      <?php endif; ?>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/index/blocks/actions.blade.php ENDPATH**/ ?>