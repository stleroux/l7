<!-- PUBLISH DATE -->

<div class="form-group <?php echo e($errors->has('published_at') ? 'has-error' : ''); ?>">

   <label for="published_at">Publish(ed) On</label>

   <?php if(Route::currentRouteName('') == 'admin.posts.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $post->published_at ?? 'N/A'; ?>

      </div>

   <?php else: ?>

      <div class="input-group input-group-sm">
         <input type="text" name="published_at" value="<?php echo e(old('published_at') ?? $post->published_at); ?>" class="form-control form-control-sm" id="datePicker" />
         <div class="input-group-append">
            <span class="input-group-text input-group-text-sm"><i class="far fa-calendar-alt"></i></span>
         </div>
      </div>
      <div class="pl-1 bg-danger"><?php echo e($errors->first('published_at')); ?></div>

   <?php endif; ?>

</div>
   <?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/fields/published_at.blade.php ENDPATH**/ ?>