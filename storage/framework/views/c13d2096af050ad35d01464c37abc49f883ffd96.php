<?php if(Session::get('fromPage')): ?>
   <a href="<?php echo e(Session::get('fromPage')); ?>"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      Back
   </a>
<?php else: ?>
   <a href="\"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      Back
   </a>
<?php endif; ?>

<?php if($next): ?>
   <a href="<?php echo e(route('admin.recipes.show', $next)); ?>"
      class="btn btn-block btn-default"
      title="Next Recipe">
      <i class="<?php echo e(config('icons.next')); ?>"></i>
      Next
   </a>
<?php endif; ?>

<?php if($previous): ?>
   <a href="<?php echo e(route('admin.recipes.show', $previous)); ?>"
      class="btn btn-block btn-default"
      title="Previous Recipe">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous
   </a>
<?php endif; ?>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')): ?>
         <a href="<?php echo e(route('admin.recipes.edit', $recipe->id)); ?>"
            class="btn btn-block btn-outline-primary"
            title="Edit Recipe">
            <i class="<?php echo e(config('icons.edit')); ?>"></i>
            Edit Recipe
         </a>
      <?php endif; ?>

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

      <a href="<?php echo e(route('recipes.print', $recipe->id)); ?>"
         class="btn btn-block btn-default mt-2"
         title="Print Recipe">
         <i class="<?php echo e(config('icons.print')); ?>"></i>
         <div class="d-none d-lg-inline">
            Print Recipe
         </div>
      </a>

      <a href="<?php echo e(route('recipes.printPDF', $recipe->id)); ?>"
         class="btn btn-block btn-default"
         title="Print Recipe to PDF">
         <i class="<?php echo e(config('icons.pdf')); ?>"></i>
         <div class="d-none d-lg-inline">
            Print to PDF
         </div>
      </a>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/sections/functions/actions.blade.php ENDPATH**/ ?>