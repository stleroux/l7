<div class="row">
   
   <div class="col mb-2 text-center">
      <?php echo $__env->make('UI.blog.buttons.previous', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('UI.blog.buttons.next', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

   <div class="col mb-2 float-right px-1">
      <div class="form-inline float-right p-0 m-0">
   
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $post)): ?>
            <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <input type="hidden" name="likeable_type" value="<?php echo e(get_class($post)); ?>"/>
               <input type="hidden" name="id" value="<?php echo e($post->id); ?>"/>
               <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
            </form>
         <?php else: ?>
            <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               <?php echo method_field('DELETE'); ?>
               <input type="hidden" name="likeable_type" value="<?php echo e(get_class($post)); ?>"/>
               <input type="hidden" name="id" value="<?php echo e($post->id); ?>"/>
               <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
            </form>
         <?php endif; ?>

      </div>
   </div>

   <div class="d-flex mb-2">
      
      <div class="float-right">

         <?php if(auth()->guard()->check()): ?>
            <a href="" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#printModal" data-link="<?php echo e($post->slug); ?>">
               <i class="fa fa-print"></i> Print
            </a>
         <?php endif; ?>


         <!-- Only show if coming from the homepage -->
         <?php if(url()->previous() == request()->root() . '/'): ?>
            <a href="<?php echo e(route('homepage')); ?>" class="btn btn-sm btn-primary">
               <i class="fas fa-home"></i> Home
            </a>
         <?php endif; ?>

         <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-sm btn-primary">
            <i class="fas fa-blog"></i> Blog
         </a>

         <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         <?php endif; ?>

         <!-- Only show if coming from the blog print page -->
         <?php if(url()->previous() == request()->root() . '/blog/print'): ?>
         
            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
         <?php endif; ?>

         <!-- Only show if coming from the blog search page -->
         <?php if(url()->previous() == request()->root() . '/blog/search'): ?>
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         <?php endif; ?>

         <!-- Only show if coming from the blog archive page -->
         <?php if(url()->previous() == request()->root() . '/blog/archive'): ?>
            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
            <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Archive
            </a>
         <?php endif; ?>
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/blog/show/topbar.blade.php ENDPATH**/ ?>