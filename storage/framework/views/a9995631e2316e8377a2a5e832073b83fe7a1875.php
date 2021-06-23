

<?php if(\Config::get('settings.blog') == 'visible'): ?>
   <?php if($posts->count() > 0): ?>
       <div class="card card-trans-0 mb-2 border-red-2">
         <div class="card-header section_header p-2">
            <i class="far fa-newspaper"></i>
            Latest Posts
         </div>
         <div class="card-body p-2">
            <?php if(count($posts) > 0): ?>
               <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="card card-trans-4 mb-2 border-black-2">
                     <div class="card_header p-2"><?php echo e(ucwords($post->title)); ?></div>
                     <div class="card_body p-2">
                        <div class="row">
                        <div class="col-sm-10">
                           <?php echo substr($post->body, 0, 250); ?>

                           <?php echo strlen($post->body) > 250 ? " [More]..." : ""; ?>

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
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/homepage/blog.blade.php ENDPATH**/ ?>