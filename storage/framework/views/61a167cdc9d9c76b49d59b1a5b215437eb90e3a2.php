<div class="row">

   <div class="col mb-2 text-center">
   </div>

   <?php if($feature->status != "Rejected" && $feature->status != "Implemented"): ?>
      <div class="col mb-2 float-right px-1">
         
         <div class="form-inline float-right p-0 m-0">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $feature)): ?>
               <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($feature)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($feature->id); ?>"/>
                  <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
               </form>
            <?php else: ?>
               <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($feature)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($feature->id); ?>"/>
                  <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
               </form>
            <?php endif; ?>
         </div>
      </div>
   <?php endif; ?>

   <div class="d-flex mb-2">

      <div class="float-right">

         <a href="<?php echo e(route('features.index')); ?>"
            class="btn btn-sm btn-light border">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            <div class="d-none d-lg-inline">
               Cancel
            </div>
         </a>

         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="<?php echo e(config('icons.help')); ?>"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>

      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/features/show/topbar.blade.php ENDPATH**/ ?>