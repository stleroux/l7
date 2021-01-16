<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.posts.index')); ?>" class="btn btn-block btn-default text-left">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         Published Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::Published()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.posts.unpublished')); ?>" class="btn btn-block btn-default text-left">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         Unpublished Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::Unpublished()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.posts.new')); ?>" class="btn btn-block btn-default text-left">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         New Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::newPosts()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.posts.future')); ?>" class="btn btn-block btn-default text-left">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         Future Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::futurePosts()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.posts.trashed')); ?>" class="btn btn-block btn-default text-left">
         <i class="<?php echo e(config('icons.trashed')); ?> text-danger"></i>
         Trashed Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/sections/functions/pages.blade.php ENDPATH**/ ?>