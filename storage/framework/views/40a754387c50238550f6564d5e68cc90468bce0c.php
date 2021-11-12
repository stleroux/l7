

<div class="col-xs-12 col-sm-4 col-md-2">

   <div class="form-group">
   
      <label for="is_published" class="<?php echo e($required ?? ''); ?>">
         <?php echo e($label ?? 'Published'); ?>

      </label>

      <br />
      
      <?php if(Route::currentRouteName('') == 'admin.faqs.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo e($faq->is_published ? 'Yes' : 'No'); ?>

         </div>

      <?php else: ?>

         <input
            type="checkbox"
            name="is_published"
            id="is_published"
            class="form-control"
            data-bootstrap-switch
            data-off-color="danger"
            data-off-text="No"
            data-on-color="success"
            data-on-text="Yes"
            placeholder="Status"
            data-inputmask=""
            <?php if($faq->is_published || old('is_published')): ?> checked <?php endif; ?>
            <?php echo e($disabled ?? ''); ?>

         />

      <?php endif; ?>

      <?php $__errorArgs = ['is_published'];
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

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/faqs/forms/fields/general/is_published.blade.php ENDPATH**/ ?>