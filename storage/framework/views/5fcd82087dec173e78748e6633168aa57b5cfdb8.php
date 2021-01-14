
<?php if($posts->count() > 0): ?>
   <div class="card mb-3 card-trans-4">
      <div class="card-header section_header p-2">
         <i class="far fa-newspaper"></i>
         Latest Posts
      </div>
      <div class="card-body section_body p-2">
         <?php if(count($posts) > 0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="card mb-2 card-trans-2">
                  <div class="card_header p-2"><?php echo e($post->title); ?></div>
                  <div class="card_body p-2">
                     <div class="row">
                     <div class="col-sm-10">
                        <p><?php echo e(substr(strip_tags($post->body), 0, 250)); ?> <?php echo e(strlen(strip_tags($post->body)) > 250 ? " [More]..." : ""); ?></p>
                     </div>
                     <div class="col-sm-2">
                        <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="btn btn-sm btn-primary float-right">
                        <div class="text text-left">
                           <i class="fa fa-chevron-right"></i> More
                        </div>
                        </a>
                     </div>
                     </div>
                  </div>
                  <div class="card-footer card_footer pl-2 p-1">
                     Created by
                     <?php echo $__env->make('common.authorFormat', ['model'=>$post, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     on <?php echo $__env->make('common.dateFormat', ['model'=>$post, 'field'=>'created_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php else: ?>
            No Records Found
         <?php endif; ?>
      </div>
   </div>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/homepage/blog.blade.php ENDPATH**/ ?>