<!-- POSTS -->

<div class="col col-md-6 col-xl-12">
   <a href="<?php echo e(route('admin.posts.index')); ?>">
      <div class="info-box">
         <span class="info-box-icon bg-info elevation-1">
            <i class="<?php echo e(config('icons.posts')); ?>"></i>
         </span>

         <div class="info-box-content">
            <span class="info-box-text h4">Posts</span>
            <?php if(Auth::user()->can('recipe-list')): ?>
               <span class="info-box-text">
                  Published : <?php echo e($userPostsPublishedCount); ?>

                  <br />
                  Unpublished : <?php echo e($userPostsUnpublishedCount); ?>

                  <br />
                  Future : <?php echo e($userPostsFutureCount); ?>

                  <br />
                  Trashed : <?php echo e($userPostsTrashedCount); ?>

                  <br />
                  <span class="info-box-number">
                     Total : <?php echo e($userPostsTotalCount); ?>

                     <br />
                     Overall Total : <?php echo e($postsCount); ?>                     
                  </span>
               </span>
            <?php else: ?>
               <span class="info-box-number">
                  Total : <?php echo e($postsCount); ?>

               </span>
            <?php endif; ?>

         </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
   </a>
</div><!-- /.col -->
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/infoBoxes/posts.blade.php ENDPATH**/ ?>