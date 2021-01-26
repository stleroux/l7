<!-- CATEGORY -->




   
      <div class="form-group">
         
         <label for="category_id" class="required">Category</label>
         <select name="category_id" id="category_id" class="form-control form-control-sm">
            <?php if(last(request()->segments()) === 'create'): ?>
               <option value="" selected>Select One</option>
            <?php endif; ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if(last(request()->segments()) === 'create'): ?>
                  <option disabled><?php echo e(ucfirst($category->name)); ?></option>
               <?php endif; ?>
               <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(last(request()->segments()) === 'create'): ?>
                     <option value="<?php echo e($children->id); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo e(ucfirst($children->name)); ?></option>
                  <?php endif; ?>
                  <?php if(last(request()->segments()) === 'edit'): ?>
                     <option value="<?php echo e($children->id); ?>" <?php echo e(($post->category_id == $children->id ) ? 'selected' : ''); ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <?php echo e(ucfirst($children->name)); ?></option>
                  <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
         <div class="pl-1 bg-danger"><?php echo e($errors->first('category_id')); ?></div>
      </div>
   <?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/form/fields/category.blade.php ENDPATH**/ ?>