

<form style="display:inline;" method="POST">
   <?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish')): ?>
      <?php if($recipe->published_at): ?>
         <button type="button"
            class="unpublish-model btn btn-block btn-default mt-2"
            data-toggle="modal"
            data-target="#unpublishModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes/unpublish', $recipe)); ?>"
            title="Unpublish Recipe"
            >
            <i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
            Unpublish Recipe
         </button>
      <?php else: ?>
         <button type="button"
            class="publish-model btn btn-block btn-default mt-2"
            data-toggle="modal"
            data-target="#publishModal"
            data-id="<?php echo e($recipe->id); ?>"
            data-url="<?php echo e(url('admin/recipes/publish', $recipe)); ?>"
            title="Publish Recipe"
            >
            <i class="<?php echo e(config('icons.publish')); ?>"></i>
            Publish Recipe
         </button>
      <?php endif; ?>
   <?php endif; ?>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/common/publishUnpublish.blade.php ENDPATH**/ ?>