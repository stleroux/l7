<?php echo $__env->make('admin.posts.show.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.blocks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.posts.show.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

   
   
   <div class="card card-trans-4">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  <?php echo e(ucfirst($post->title)); ?>

               </div>
            </div>
            
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <table class="table table-sm table-hover table-striped">
            <thead>
               <tr>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th>Category</th>
                  <td><?php echo e($post->category->name); ?></td>
               </tr>
               <tr>
                  <th>Published Date</th>
                  <td><?php echo e($post->published_at); ?></td>
               </tr>
               <tr>
                  <th>Body</th>
                  <td><?php echo $post->body; ?></td>
               </tr>
               <tr>
                  <th>Author</th>
                  <td><?php echo e($post->user->username); ?></td>
               </tr>
            </tbody>
         </table>

      </div>

   </div>

   <?php echo $__env->make('admin.posts.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/show.blade.php ENDPATH**/ ?>