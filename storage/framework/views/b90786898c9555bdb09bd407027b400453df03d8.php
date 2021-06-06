<div class="row d-flex pb-2">
   
   <div class="col-xl-9">
      <?php echo $__env->make('UI.blog.buttons.previous', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('UI.blog.buttons.next', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   <div class="col-xl-3 text text-right">
      

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
         <!-- Only show if coming from the blog page -->


         <!-- Show this button after posting a comment -->


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
<?php /**PATH C:\sites\l7\resources\views/UI/blog/show/topbar.blade.php ENDPATH**/ ?>