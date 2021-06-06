<!-- TAGS -->

<div class="col-12">
   
   <div class="form-group">

      <label for="tag_id">Tags</label>

      <select class="form-control form-control-sm select2" data-style="btn-sm btn-light" id="tags" name="tags[]" multiple >

         <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(last(request()->segments()) === 'create'): ?>
               <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
            <?php endif; ?>

            <?php if(last(request()->segments()) === 'edit'): ?>
               <option value="<?php echo e($tag->id); ?>" <?php echo e($project->tags->contains($tag->id) ? "selected='selected" : ""); ?>><?php echo e($tag->name); ?></option>               
            <?php endif; ?>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </select>

      <div class="pl-1 bg-danger"><?php echo e($errors->first('tag')); ?></div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/fields/general/tags.blade.php ENDPATH**/ ?>