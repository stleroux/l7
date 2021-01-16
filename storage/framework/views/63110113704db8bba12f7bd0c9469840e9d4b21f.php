
      <?php if(!$post->deleted_at): ?>
         
         <?php if($post->user_id == Auth::id() || Auth::user()->can('post-edit')): ?>
            <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-sm btn-default" title="Edit Post">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>

            <?php if(!$post->published_at): ?>
               <button type="button"
                  class="publish-model btn btn-sm btn-default"
                  data-toggle="modal"
                  data-target="#publishModal"
                  data-id="<?php echo e($post->id); ?>"
                  data-url="<?php echo e(url('admin/posts/publish', $post)); ?>"
                  title="Publish Post"
                  >
                  <i class="<?php echo e(config('icons.publish')); ?>"></i>
                  
               </button>
            <?php else: ?>
               <button type="button"
                  class="unpublish-model btn btn-sm btn-default"
                  data-toggle="modal"
                  data-target="#unpublishModal"
                  data-id="<?php echo e($post->id); ?>"
                  data-url="<?php echo e(url('admin/posts/unpublish', $post)); ?>"
                  title="Unpublish Post"
                  >
                  <i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
                  
               </button>
            <?php endif; ?>

         <button type="button"
            class="resetViews-model btn btn-sm btn-default"
            data-toggle="modal"
            data-target="#resetViewsModal"
            data-id="<?php echo e($post->id); ?>"
            data-url="<?php echo e(url('admin/posts/resetViews', $post)); ?>"
            title="Reset Post Views"
            >
            <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
            
         </button>

      <?php endif; ?>

         
         <?php if($post->user_id == Auth::id() || Auth::user()->can('post-delete')): ?>
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($post->id); ?>"
               data-url="<?php echo e(url('admin/posts', $post)); ?>"
               title="Trash Post"
               >
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </button>
         <?php endif; ?>
         
      <?php endif; ?>

      <?php if($post->deleted_at): ?>
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-edit')): ?>
            
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($post->id); ?>"
               data-url="<?php echo e(url('admin/posts/restore', $post)); ?>"
               title="Restore Post"
               >
               <i class="<?php echo e(config('icons.restore')); ?>"></i>
               
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($post->id); ?>"
               data-url="<?php echo e(url('admin/posts/delete', $post)); ?>"
               title="Permanently Delete Post"
               >
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         <?php endif; ?>
      <?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/actions.blade.php ENDPATH**/ ?>