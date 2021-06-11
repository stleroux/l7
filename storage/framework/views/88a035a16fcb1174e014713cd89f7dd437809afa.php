<!-- TAGS -->

<div class="form-group">

   <label for="tag_id">Tags</label>

   <?php if(Route::currentRouteName('') == 'admin.posts.show'): ?>

      <?php if($post->tags->count() > 0): ?>
            <div class="col p-1 m-0 bg-gray-light">
               <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <span class="lead">
                     <span class="badge badge-secondary">
                        <?php echo e(ucwords($t->name)); ?>                     
                     </span>
                  </span>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
            </div>            
         <?php else: ?>
            <div class="col p-1 m-0 bg-gray-light">N/A</div>
         <?php endif; ?>

   <?php else: ?>

      <select class="form-control form-control-sm select2" data-style="btn-sm btn-light" id="tags" name="tags[]" multiple >

         <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(last(request()->segments()) === 'create'): ?>
               <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
            <?php endif; ?>

            <?php if(last(request()->segments()) === 'edit'): ?>
               <option value="<?php echo e($tag->id); ?>" <?php echo e($post->tags->contains($tag->id) ? "selected='selected" : ""); ?>><?php echo e($tag->name); ?></option>               
            <?php endif; ?>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </select>

      <div class="pl-1 bg-danger"><?php echo e($errors->first('tag')); ?></div>

   <?php endif; ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/tags.blade.php ENDPATH**/ ?>