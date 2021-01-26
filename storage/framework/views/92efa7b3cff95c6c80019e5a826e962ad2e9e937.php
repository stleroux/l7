<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-create')): ?>
            <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-block btn-outline-success" title="Create Post">
               <i class="<?php echo e(config('icons.add')); ?>"></i>
               <div class="d-none d-lg-inline">
                  Create Post
               </div>
            </a>
         <?php endif; ?>
      

      <?php if(Route::currentRouteName() == 'admin.posts.index'): ?>
         <form action="<?php echo e(route('admin.posts.mass_unpublish')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-warning mt-2"
               id="btn_multiunpublish"
               style="display:none"
               data-target="#massUnpublish-modal">
               <i class="<?php echo e(config('icons.unpublish')); ?>"></i>
               Unpublish Selected
            </a>
         </form>

         <form action="<?php echo e(route('admin.posts.mass_destroy')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-pink mt-2"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="<?php echo e(config('icons.trash')); ?>"></i>
               Trash Selected Posts
            </a>
         </form>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.trashed'): ?>
         <form action="" method="POST" class="">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-default mt-2"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
               Restore Selected Posts
            </a>
         </form>

         <form action="<?php echo e(route('admin.posts.mass_delete')); ?>" method="post" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
            <a data-toggle="modal"
               class="btn btn-block btn-outline-danger mt-2"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="<?php echo e(config('icons.delete')); ?>"></i>
               Delete Selected Post
            </a>
         </form>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.unpublished'): ?>
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
      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/sections/functions/actions.blade.php ENDPATH**/ ?>