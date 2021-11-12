
<div>


                     

                     
                  

<div class="col">
  <div class="card card-trans-4">
     <div class="card-header font-weight-bold card-trans-4">
        Create an account and proceed
     </div>
     <div class="card-body mb-0 pb-2">
        <div class="form-row">
           <div class="col">
<?php if($shippingRequired): ?>
              <div class="form-label-group pb-0 mb-2">
                 <input type="text"
                    name="first_name"
                    id="first_name"
                    placeholder="First Name"
                    value="<?php echo e(old('first_name')); ?>"
                    required
                    class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0 pb-0"
                 />
                 <label for="first_name" class="font-weight-normal">First Name</label>
                 <?php $__errorArgs = ['first_name'];
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
<?php endif; ?>
           </div>
           <div class="col">
              <div class="form-label-group pb-0 mb-2">
                 <input type="text"
                    name="last_name"
                    id="last_name"
                    placeholder="Last Name"
                    value="<?php echo e(old('last_name')); ?>"
                    required
                    class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0 pb-0"
                 />
                 <label for="last_name" class="font-weight-normal">Last Name</label>
                 <?php $__errorArgs = ['last_name'];
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
        <div class="form-row mb-1">
           <div class="col">
              <div class="form-label-group pb-0 mb-2">
                 <input type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                    value="<?php echo e(old('email')); ?>"
                    required
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0 pb-0"
                 />
                 <label for="email" class="font-weight-normal">Email</label>
                 <?php $__errorArgs = ['email'];
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
        <div class="form-row mb-1">
           <div class="col-md-6">
              <div class="form-label-group pb-0 mb-2">
                 <input type="password"
                    name="password"
                    id="password"
                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    required
                    autocomplete="new-password"
                    placeholder="Password"
                 />
                 <label for="password" class="font-weight-normal">Password</label>
                 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span
                       class="invalid-feedback" role="alert">
                       <strong><?php echo e($message); ?></strong>
                    </span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-label-group pb-0 mb-2">
                 <input type="password"
                    id="password-confirm"
                    class="form-control"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm Password"
                 />
                 <label for="password-confirm" class="font-weight-normal">Confirm Password</label>
              </div>
           </div>
        </div>
        <div class="form-row mb-1">
           <div class="col-4">
              <div class="form-label-group pb-0 mb-2">
                 <input type="phone"
                    name="phone"
                    id="phone"
                    placeholder="Phone or Cell"
                    value="<?php echo e(old('phone')); ?>"
                    required
                    data-inputmask="'mask': '(999) 999-9999'"
                    class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0 pb-0"
                 />
                 <label for="phone" class="font-weight-normal">Telephone</label>
                 <?php $__errorArgs = ['phone'];
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
           <div class="col">
              <div class="form-label-group pb-0 mb-2">
                 <input type="text"
                    name="company_name"
                    id="company_name"
                    placeholder="Company Name"
                    value="<?php echo e(old('company_name')); ?>"
                    class="form-control <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0 pb-0"
                 />
                 <label for="company_name" class="font-weight-normal">Company Name</label>
                 <?php $__errorArgs = ['company_name'];
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

        <div class="row mb-1 pb-2">
           <div class="col">
              <textarea name="comment" placeholder="Additional comments" class="form-control"></textarea>
           </div>
        </div>
        
        <div class="form-row mb-0 pb-2">
           <div class="col mb-0 pb-0">
              <button type="submit" formaction="<?php echo e(route('cart.requestQuote')); ?>" class="btn btn-sm btn-success">Create Account and Proceed</button>
              <button type="reset" class="btn btn-sm btn-default">Reset Form</button>
              <a href="<?php echo e(route('contact', ['type'=>'quoteRequest'])); ?>" class="btn btn-sm btn-primary">Submit via Contact Us form instead</a>
           </div>
        </div>

     </div>
     <div class="card-footer card-trans-6 p-1 text-center">
        Using the Contact Us form will require you to create an account once the estimate is created so you can purchase the requested item(s).
        
        
     </div>
  </div>
</div>
</div><?php /**PATH C:\sites\l7\resources\views/livewire/checkout-form-component.blade.php ENDPATH**/ ?>