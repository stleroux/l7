<div class="row">

   <div class="col mb-2 text-center">

      <?php if($previous): ?>
         <a href="<?php echo e(route('carvings.show', $previous)); ?>"
            class="btn btn-sm btn-secondary"
            title="Previous Carving">
            <i class="<?php echo e(config('icons.previous')); ?>"></i>
            Previous Carving
         </a>
      <?php endif; ?>

      <?php if($next): ?>
         <a href="<?php echo e(route('carvings.show', $next)); ?>"
            class="btn btn-sm btn-secondary"
            title="Next Carving">
            Next Carving
            <i class="<?php echo e(config('icons.next')); ?>"></i>
         </a>
      <?php endif; ?>

   </div>

   <?php if(auth()->guard()->check()): ?>
      <div class="col mb-2 float-right px-1">
         <div class="form-inline float-right p-0 m-0">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $carving)): ?>
               <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($carving)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($carving->id); ?>"/>
                  <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
               </form>
            <?php else: ?>
               <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <input type="hidden" name="likeable_type" value="<?php echo e(get_class($carving)); ?>"/>
                  <input type="hidden" name="id" value="<?php echo e($carving->id); ?>"/>
                  <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
               </form>
            <?php endif; ?>
         </div>
      </div>
   <?php endif; ?>

   <div class="d-flex mb-2">
      <div class="float-right">
         



      <a href="<?php echo e(route('carvings.faq')); ?>"
         class="btn btn-sm btn-secondary">
         <i class="<?php echo e(config('icons.faq')); ?>"></i>
         FAQ
      </a>

      <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
         <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
      <?php endif; ?>

      <?php if(Session::get('fromPage')): ?>
         <a href="<?php echo e(Session::get('fromPage')); ?>"
            class="btn btn-sm btn-secondary d-print-none"
            title="Back">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            <div class="d-none d-lg-inline">
               Carvings
               
            </div>
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('carvings.index')); ?>"
            class="btn btn-sm btn-secondary">
            <i class="<?php echo e(config('icons.back')); ?>"></i>
            Carvings
         </a>
      <?php endif; ?>


      </div>

   </div>

   
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/topbar.blade.php ENDPATH**/ ?>