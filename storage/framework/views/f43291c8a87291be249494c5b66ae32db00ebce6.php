

      <?php if(!$tag->deleted_at): ?>

         
            <a href="<?php echo e(route('admin.tags.edit', $tag)); ?>" class="btn btn-sm btn-default" title="Edit Tag">
               <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
               
            </a>
         

         
            <a href="#"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="<?php echo e($tag->id); ?>"
               data-url="<?php echo e(url('admin/tags', $tag)); ?>"
               title="Trash Tag">
               <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
               
            </a>
         

      <?php endif; ?>

      <?php if($tag->deleted_at): ?>

         

            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="<?php echo e($tag->id); ?>"
               data-url="<?php echo e(url('admin/tags/restore', $tag)); ?>"
               title="Restore Tag"
               >
               <i class="<?php echo e(config('icons.restore')); ?>"></i>
               
            </button>


            <!-- CANNOT use a link here, must use a button -->
            <button
               type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="<?php echo e($tag->id); ?>"
               data-url="<?php echo e(url('admin/tags/delete', $tag)); ?>"
               title="Permanently Delete Tag">
               <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
               
            </button>
         
         

      <?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/index/actions.blade.php ENDPATH**/ ?>