<div class="form-group">
   
   <label for="body" class="required">Body</label>
   
   <textarea name="body" id="wysiwyg" rows="5" class="form-control form-control-sm wysiwyg"><?php echo e(old('body') ?? $post->body); ?></textarea>
   <div class="pl-1 bg-danger"><?php echo e($errors->first('body')); ?></div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/forms/fields/body.blade.php ENDPATH**/ ?>