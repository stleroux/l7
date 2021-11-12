<div>
	
	<div class="card card-trans-6">
		<div class="card-body">
			<?php if(Cart::count() > 0): ?>
			<table class="table table-sm table-hover">
				<thead class="thead-dark">
					<tr class="d-flex">
						
						
						<th class="col-8">Product</th>
						<th class="col-4">Qty</th>
						<th class="hidden text-right col-1">Price</th>
						<th class="hidden text-right col-1">Subtotal</th>
					</tr>
				</thead>

				<tbody>
					<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="d-flex">
						
						
						<td class="col-8">
							<div><?php echo e($row->name); ?></div>
							<span><?php echo e(($row->options->has('size') ? $row->options->size : '')); ?></span>
						</td>
						<td class="col-4">
							<div class="form form-inline">
								<form class="">
									<input type="number" value="<?php echo e($row->qty); ?>" name="quantity" class="form-control form-control-sm col-4">
									<button type="submit" formaction="<?php echo e(route('cart.update', $row->rowId)); ?>" class="btn btn-xs btn-success">Update</button>
									<button type="submit" formaction="<?php echo e(route('cart.remove', $row->rowId)); ?>" class="btn btn-xs btn-danger">Delete</button>
								</form>
							</div>
						</td>
						<td class="hidden text-right col-1">$ <?php echo e(number_format($row->price, 2)); ?></td>
						<td class="hidden text-right col-1">$ <?php echo e(number_format($row->priceTotal,2)); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
						<tr>
							<td class="col-12">
								<div class="icheck-primary d-inline">
									<input type="checkbox" id="shippingRequired" wire:model="shippingRequired" value="<?php echo e(old('shippingRequired')); ?>">
									<label for="shippingRequired" class="font-weight-normal">Shipping required
									</label>
								</div>
							</td>
						</tr>
					
				</tbody>

				



				
			</table>
			<?php else: ?>
			<?php echo e(config('settings.noRecordsFound')); ?>

			<?php endif; ?>
		</div>

	</div>



<form method="POST">
		<?php echo csrf_field(); ?>
		<?php if(auth()->guard()->guest()): ?>
		<?php if(Cart::count()): ?>
		<a href="<?php echo e(route('cart.destroy')); ?>" class="btn btn-sm btn-danger mb-3">Clear Cart</a>

		<div class="row">

			
			<div class="col">
				<div class="card card-trans-4">
					<div class="card-header font-weight-bold card-trans-4">
						Create an account and proceed
					</div>
					<div class="card-body mb-0 pb-2">
						<div class="form-row">
							<div class="col">
								<div class="form-label-group pb-0 mb-2">
									<input type="text"
									name="first_name"
									id="first_name"
									placeholder="First Name"
									value="<?php echo e(old('first_name')); ?>"
									
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
							</div>
							<div class="col">
								<div class="form-label-group pb-0 mb-2">
									<input type="text"
									name="last_name"
									id="last_name"
									placeholder="Last Name"
									value="<?php echo e(old('last_name')); ?>"
									
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
								
								autocomplete="new-password"
								placeholder="Confirm Password"
								/>
								<label for="password-confirm" class="font-weight-normal">Confirm Password</label>
							</div>
						</div>
					</div>
<!------------------------------------------------------------------->
						<?php if($shippingRequired): ?>
							<div class="form-row mb-1">
								<div class="col">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="address_1"
											id="address_1"
											class="form-control <?php $__errorArgs = ['address_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
											placeholder="Address"
										/>
										<label for="address_1" class="font-weight-normal">Address</label>
										<?php $__errorArgs = ['address_1'];
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
										<input type="text"
											name="city"
											id="city"
											class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
											placeholder="City"
										/>
										<label for="city" class="font-weight-normal">City</label>
										<?php $__errorArgs = ['city'];
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
										<input type="text"
											name="province"
											id="province"
											class="form-control <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
											placeholder="Province"
										/>
										<label for="province" class="font-weight-normal">Province</label>
										<?php $__errorArgs = ['province'];
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
								<div class="col-md-4">
									<div class="form-label-group pb-0 mb-2">
										<input type="text"
											name="postal_code"
											id="postal_code"
											class="form-control <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
											placeholder="Postal Code / Zip"
										/>
										<label for="postal_code" class="font-weight-normal">Postal Code / Zip</label>
										<?php $__errorArgs = ['postal_code'];
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
						<?php endif; ?>
<!------------------------------------------------------------------->

					<div class="form-row mb-1">
						<div class="col-4">
							<div class="form-label-group pb-0 mb-2">
								<input type="phone"
								name="phone"
								id="phone"
								placeholder="Phone or Cell"
								value="<?php echo e(old('phone')); ?>"
								
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
							<button type="submit" formaction="<?php echo e(route('cart.requestQuote')); ?>"  class="btn btn-sm btn-success">Create Account and Proceed</button>
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

		<div class="col">
			<div class="card card-trans-4">
				<div class="card-header font-weight-bold card-trans-4">
					Already have an account with us?
				</div>
				<div class="card-body">
					<a href="<?php echo e(route('login')); ?>" class="btn btn-sm btn-primary">Login to Continue</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php else: ?>

	<div class="row mb-3">
		<div class="col">
			<a href="<?php echo e(route('cart.destroy')); ?>" class="btn btn-sm btn-danger">Clear Cart</a>
			<button type="submit" formaction="<?php echo e(route('cart.createQuote')); ?>" class="btn btn-sm btn-success">Submit Quote Request</button>
		</div>
	</div>

	<?php endif; ?>

</form>
</div>
<?php /**PATH C:\sites\l7\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>