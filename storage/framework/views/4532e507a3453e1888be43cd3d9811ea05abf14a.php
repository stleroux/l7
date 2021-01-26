<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.')); ?>"></i>
   <?php echo e(ucwords($post->title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
   <li class="breadcrumb-item"><?php echo e(ucwords($post->title)); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.blog.blocks.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.leaveComment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.blog.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card card-trans-4">
      <div class="card-body">
         <div class="row">
            <div class="col-9">
               <?php echo $post->body; ?>

            </div>
            <div class="col-3">

               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-1">Image</div>
                  <div class="card-body p-1">
                     <?php if($post->image): ?>
                        <?php if(auth()->guard()->check()): ?>
                           <div class="text-center">
                              <a href="" data-toggle="modal" data-target="#imageModal">
                                 <img src="/_posts/<?php echo e($post->image); ?>" alt="" height="100%" width="100%">
                              </a>
                              <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-primary">View Larger</a>
                           </div>
                        <?php else: ?>
                           <img src="/_posts/<?php echo e($post->image); ?>" alt="" height="100%" width="100%">
                        <?php endif; ?>
                     <?php endif; ?>
                  </div>
               </div>

               <div class="card mb-0 pb-0 card-trans-4">
                  <div class="card-header card_header p-2">Information</div>
                  <table class="table table-sm mb-0 pb-0">
                     <tbody>
                        <tr>
                           <th>Category</th>
                           <td><?php echo e(ucfirst($post->category->name)); ?></td>
                        </tr>
                        <tr>
                           <th>Published On</th>
                           <td><?php echo e($post->published_at->format(Config::get('settings.dateFormat'))); ?></td>
                        </tr>
                        <tr>
                           <th>Views</th>
                           <td><?php echo e($post->views); ?></td>
                        </tr>
                        <tr>
                           <th>Created By</th>
                           <td><?php echo $__env->make('common.authorFormat', ['model'=>$post, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                        </tr>
                        <tr>
                           <th>Create Date</th>
                           <td><?php echo e($post->created_at->format(Config::get('settings.dateFormat'))); ?></td>
                        </tr>
                        <tr>
                           <th>Updated By</th>
                           <td><?php echo $__env->make('common.authorFormat', ['model'=>$post, 'field'=>'modifiedBy'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                        </tr>
                        <tr>
                           <th>Update Date</th>
                           <td><?php echo e($post->updated_at->format(Config::get('settings.dateFormat'))); ?></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            
            </div>
         </div>
      </div>
   </div>

   <div class="row m-0 p-0">
      <div class="col m-0 p-0">
         <?php echo $__env->make('UI.blog.show.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>

   <?php echo $__env->make('UI.blog.show.imageModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.show.imageModal_XL', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.show.printModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blog/show.blade.php ENDPATH**/ ?>