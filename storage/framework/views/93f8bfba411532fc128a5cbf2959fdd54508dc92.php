<div class="row mb-2">

   <div class="col">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-create')): ?>
         <?php echo $__env->make('admin.movies.buttons.add', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
   </div>

   <div class="col">

      <div class="float-right">
         <div class="dropdown text-center float-right">
            <a class="dropdown-button border"
               id="dropdown-menu"
               data-toggle="dropdown"
               data-boundary="viewport"
               aria-haspopup="true"
               aria-expanded="false">
               <i class="<?php echo e(config('icons.ellipsis')); ?> mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
                  <a href="<?php echo e(route('admin.movies.index')); ?>" class="dropdown-item bg-light">
                     <i class="<?php echo e(config('icons.movies')); ?>"></i>
                     All Movies
                  </a>
               
                  <a href="<?php echo e(route('admin.movies.trashed')); ?>" class="dropdown-item bg-light">
                     <i class="<?php echo e(config('icons.trashed')); ?> text-danger"></i>
                     Trashed Movies
                  </a>
               
            </div>
         </div>
      </div>

      <div class="float-right px-1">         
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="<?php echo e(config('icons.help')); ?>"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>
      </div>

      
         <form action="<?php echo e(route('admin.movies.mass_destroy')); ?>" method="post" class="float-right p-0 pl-1">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="<?php echo e(config('icons.trash')); ?>"></i>
               Trash Selected
            </a>
         </form>
         
         <form action="<?php echo e(route('admin.recipes.mass_resetViews')); ?>" method="post" class="float-right p-0 pl-1">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="mass_resetViews_ids" id="mass_resetViews_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-secondary"
               id="btn_multiresetViews"
               style="display:none"
               data-target="#massResetViews-modal">
               <i class="<?php echo e(config('icons.resetViews')); ?>"></i>
               Reset View Counts
            </a>
         </form>


      













      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/movies/index/topbar.blade.php ENDPATH**/ ?>