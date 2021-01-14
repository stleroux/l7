<!-- HOMEPAGE BLOG COUNT -->

<div class="form-group">

   <label for="homepageBlogCount" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Homepage Blog Count'); ?>

   </label>
   
   <input
      type="number"
      name="homepageBlogCount"
      id="homepageBlogCount"
      class="form-control <?php $__errorArgs = ['homepageBlogCount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('homepageBlogCount') ?? Config::get('settings.homepageBlogCount')); ?>"
      placeholder="homepageBlogCount"
      data-inputmask=""
   />
   <small>The number of blog entries to show on the Homepage</small>
   
   <?php $__errorArgs = ['homepageBlogCount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="invalid-feedback" role="alert">
         <strong><?php echo e($message); ?></strong>
      </span>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/homepageBlogCount.blade.php ENDPATH**/ ?>