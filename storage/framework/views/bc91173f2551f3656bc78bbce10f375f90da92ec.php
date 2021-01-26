<form action="<?php echo e(route('admin.homepage.update', $newUser->id)); ?>" method="POST">
   <?php echo csrf_field(); ?>
   <?php echo method_field("PUT"); ?>
   
   <div class="card">
      <div class="card-header p-2 bg-primary">New User</div>
      <div class="card-body p-2">
         <input type="hidden" name="name" value="<?php echo e($newUser->name); ?>">

         <div class="row">

            <div class="form-group col-12">

               <label for="title" class="<?php echo e($required ?? ''); ?>">
                  <?php echo e($label ?? 'Title'); ?>

               </label>
               
               <input
                  type="text"
                  name="title"
                  id="title"
                  class="form-control form-control-sm <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                  value="<?php echo e(old('title') ?? $newUser->title); ?>"
                  placeholder="Title"
                  data-inputmask=""
                  autofocus
                  onfocus="this.focus();this.select()"
               />
               
               <?php $__errorArgs = ['title'];
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

            <div class="form-group col-12">
               <label for="body" class="required">Body</label>
               <textarea name="body" id="wysiwyg-small" class="form-control form-control-sm wysiwyg-small"><?php echo e(old('body') ?? $newUser->body); ?></textarea>
               <div class="pl-1 bg-danger"><?php echo e($errors->first('body')); ?></div>
            </div>

         </div>      
      </div>
      <div class="card-footer">
         <button type="submit" class="btn btn-sm btn-primary">Save</button>
         <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
      </div>
   </div>

</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/frontend/general/homepage/fields/newUser.blade.php ENDPATH**/ ?>