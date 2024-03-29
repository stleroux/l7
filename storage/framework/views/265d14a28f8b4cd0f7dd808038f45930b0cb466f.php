<!-- NAME -->

<div class="col-xs-12 col-sm-4">
   
   <div class="form-group">
      
      <label for="name" class="required">Name</label>

      <?php if(Route::currentRouteName('') == 'admin.offerings.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $offering->name; ?>

         </div>

      <?php else: ?>
      
         <input
            type="text"
            name="name"
            id="name"
            class="form-control form-control-sm required <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            value="<?php echo e(old('name') ?? $offering->name); ?>"
            autofocus
            onfocus="this.focus();this.select()">
            
      <?php endif; ?>
      
      <?php $__errorArgs = ['name'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/forms/fields/general/name.blade.php ENDPATH**/ ?>