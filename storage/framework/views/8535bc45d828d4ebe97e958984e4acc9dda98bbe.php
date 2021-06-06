<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-create')): ?>
   <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="part" value="main" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Parent Category</div>
            <div class="float-right">
               <?php echo $__env->make('admin.categories.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.categories.actions.common.save', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>

         

         <div class="card-body pb-0">

            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="mName" class="required">Category Name</label>
                     <input type="text" name="mName" class="form-control form-control-sm <?php $__errorArgs = ['mName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                     <?php $__errorArgs = ['mName'];
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

               <div class="w-100"></div>

               <div class="col">
                  <div class="form-group">
                     <label for="mDescription">Category Description</label>
                     <input type="text" name="mDescription" class="form-control form-control-sm">
                  </div>
               </div>
            </div>
            
         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/categories/create/parent.blade.php ENDPATH**/ ?>