

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.blog')); ?>"></i>
   Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.blog.blocks.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.blog.blocks.faqs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php if(count($posts) > 0): ?>
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="card mb-2 card-trans-4">

            <div class="card-header card_header p-2">
               <i class="far fa-newspaper"></i>
               <?php echo e($post->title); ?>


               <span class="float-right font-weight-normal">
                  
                  <small class="text-steel">
                     Likes : <?php echo e($post->likes()->count()); ?> / 
                     Views : <?php echo e(views($post)->count()); ?>

                  </small>
               </span>

            </div>

            <div class="card-body card_body">
               <div class="row">
               
                  <div class="col-1 px-3">
                     <?php if($post->user->image): ?>
                        <img src="_profiles/<?php echo e($post->user->image); ?>" alt="" height="60" width="60">
                     <?php else: ?>
                        <i class="fa fa-3x fa-user" aria-hidden="true"></i>
                     <?php endif; ?>                  
                  </div>

                  <div class="col-9 px-2">
                     <p><?php echo substr(strip_tags($post->body), 0, 250); ?> <?php echo e(strlen(strip_tags($post->body)) > 250 ? ' [More]...' : ''); ?></p>
                  </div>

                  <div class="col px-2 text text-right">
                     <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-chevron-right"></i> Read More
                     </a>
                  </div>
               
               </div>
            </div>

            <div class="card-footer card_footer p-1 card-trans-2">
               Created by <?php echo $__env->make('common.authorFormat', ['model'=>$post, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               on <?php echo $__env->make('common.dateFormat', ['model'=>$post, 'field'=>'created_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

               
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

         </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="pb-2">

         <?php echo e($posts->links()); ?>

      </div>
   <?php else: ?>
      <div class="card mb-2 card-trans-4">
         <div class="card-body p-2">
            <?php echo e(config('settings.noRecordsFound')); ?>

         </div>
      </div>
   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/blog/index.blade.php ENDPATH**/ ?>