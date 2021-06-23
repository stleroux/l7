<div class="row">

   <div class="col mb-2 text-center">

      <?php if($previous): ?>
         <a href="<?php echo e(route('projects.show', $previous)); ?>"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="<?php echo e(config('icons.previous')); ?>"></i>
            Previous Project
         </a>
      <?php endif; ?>

      <?php if($next): ?>
         <a href="<?php echo e(route('projects.show', $next)); ?>"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="<?php echo e(config('icons.next')); ?>"></i>
         </a>
      <?php endif; ?>

   </div>

   <div class="col mb-2 float-right px-1">
      <div class="form-inline float-right p-0 m-0">
         <?php if(auth()->guard()->check()): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $project)): ?>
               <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($project)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($project->id); ?>"/>
                  <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
               </form>
            <?php else: ?>
               <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($project)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($project->id); ?>"/>
                  <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
               </form>
            <?php endif; ?>
         <?php endif; ?>
      </div>
   </div>

   <div class="d-flex mb-2">
      <div class="float-right">



         <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         <?php endif; ?>

         <a href="<?php echo e(route('projects.index')); ?>"
            class="btn btn-sm btn-secondary">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            Projects
         </a>
      </div>

   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/show/topbar.blade.php ENDPATH**/ ?>