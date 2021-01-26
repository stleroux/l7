<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
         <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-block btn-outline-success">
            <i class="<?php echo e(config('icons.add')); ?>"></i>
            <div class="d-none d-lg-inline">
               Create User
            </div>
         </a>
      <?php endif; ?>

      
      <?php if(Route::currentRouteName() == 'admin.users.approved'): ?>
         <form action="<?php echo e(route('admin.users.mass_disable')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            
            <input type="hidden" name="mass_disable_ids" id="mass_disable_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multidisable"
               style="display:none"
               data-target="#massDisable-modal">
               <i class="<?php echo e(config('icons.disabled')); ?>"></i>
               Disable Selected Users
            </a>
         </form>
      <?php endif; ?>
      

      
      <?php if(Route::currentRouteName() == 'admin.users.disabled'): ?>
         <form action="<?php echo e(route('admin.users.mass_approve')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            
            <input type="hidden" name="mass_approve_ids" id="mass_approve_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multiapprove"
               style="display:none"
               data-target="#massApprove-modal">
               <i class="<?php echo e(config('icons.active')); ?>"></i>
               Approve Selected Users
            </a>
         </form>
      <?php endif; ?>
      

      
      <?php if(Route::currentRouteName() != 'admin.users.trashed'): ?>
         <form action="<?php echo e(route('admin.users.mass_destroy')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="<?php echo e(config('icons.trash')); ?>"></i>
               Trash Selected Users
            </a>
         </form>
      <?php endif; ?>
      


      
      <?php if(Route::currentRouteName() == 'admin.users.trashed'): ?>         
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
               Restore Selected Users
            </a>
         </form>

         <form action="<?php echo e(route('admin.users.mass_delete')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="<?php echo e(config('icons.delete')); ?>"></i>
               Delete Selected Users
            </a>
         </form>
      <?php endif; ?>
      

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/sections/functions/actions.blade.php ENDPATH**/ ?>