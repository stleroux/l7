<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <div class="container pt-2">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card card-trans-2">




               <div class="card-header bg-info">
                  <i class="<?php echo e(config('icons.login')); ?>"></i>
                  <?php echo e(__('Login')); ?>

               </div>

               <div class="card-body">
                  <form method="POST" action="<?php echo e(route('login')); ?>">
                     <?php echo csrf_field(); ?>

<!-- Display message if account has not been approved by an administrator yet -->
<?php if(session()->has('message')): ?>
   <p class="alert alert-info">
      <?php echo e(session()->get('message')); ?>

   </p>
<?php endif; ?>




<div class="form-group row">
    <label for="login" class="col-sm-4 col-form-label text-md-right">
        <?php echo e(__('Username or Email')); ?>

    </label>
 
    <div class="col-md-6">
        <input id="login" type="text"
               class="form-control<?php echo e($errors->has('username') || $errors->has('email') ? ' is-invalid' : ''); ?>"
               name="login" value="<?php echo e(old('username') ?: old('email')); ?>" required autofocus>
 
        <?php if($errors->has('username') || $errors->has('email')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('username') ?: $errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-6">
                           <input
                              id="password"
                              type="password"
                              class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                              name="password"
                              required
                              autocomplete="current-password"
                           >

                           <?php $__errorArgs = ['password'];
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

                     <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                           <div class="form-check">
                              <input
                                 class="form-check-input"
                                 type="checkbox"
                                 name="remember"
                                 id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>

                              >
                              <label class="form-check-label" for="remember">
                                 <?php echo e(__('Remember Me')); ?>

                              </label>
                           </div>
                        </div>
                     </div>

                     <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                           <button type="submit" class="btn btn-primary">
                              <?php echo e(__('Login')); ?>

                           </button>

                           <?php if(Route::has('password.request')): ?>
                              <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                 <?php echo e(__('Forgot Your Password?')); ?>

                              </a>
                           <?php endif; ?>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-fw', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/auth/login.blade.php ENDPATH**/ ?>