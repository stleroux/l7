<!-- LOGIN COUNT WARNING -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="login_count_warning" class="<?php echo e($required ?? ''); ?>">
               <?php echo e($label ?? 'Login Count Warning'); ?>

            </label>
            
            <input
               type="text"
               name="login_count_warning"
               id="login_count_warning"
               class="form-control <?php $__errorArgs = ['login_count_warning'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               value="<?php echo e(old('loginCountWarning') ?? Config::get('settings.loginCountWarning')); ?>"
               placeholder="login_count_warning"
               data-inputmask=""
            />
            <small>How many times a user has to login to the site before the New User Panel is no longer shown</small>
            
            <?php $__errorArgs = ['login_count_warning'];
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
   </div>
   
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/settings/loginCountWarning.blade.php ENDPATH**/ ?>