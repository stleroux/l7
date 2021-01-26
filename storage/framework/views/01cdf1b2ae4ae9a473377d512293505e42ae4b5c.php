<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.posts.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.posts.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         All Post
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.posts.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.posts.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Post::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/show/blocks/pages.blade.php ENDPATH**/ ?>