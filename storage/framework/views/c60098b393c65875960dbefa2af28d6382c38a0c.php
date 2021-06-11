

   <form action="<?php echo e(route('carvings.comment.store', $carving->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>

      <div class="card card-trans-2 card-outline card-info mb-2">

         <div class="card-header bg-primary font-weight-bold">
            <i class="<?php echo e(config('icons.comment')); ?>"></i>
            Leave a comment
         </div>
         
         <div class="card-body p-2">
            
            <div class="form-group">
               
               <textarea name="comment" id="" rows="3" class="form-control form-control-sm <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('comment') ?? $carving->comment); ?></textarea>
               
               <?php $__errorArgs = ['comment'];
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

            <button type="submit" class="btn btn-sm btn-block btn-success">
               <i class="<?php echo e(config('icons.add')); ?>"></i>
               Add Comment
            </button>

         </div>

         <div class="card-footer text-dark p-1">
            <small>Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.</small>
         </div>
      </div>

   </form>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/leave_comment.blade.php ENDPATH**/ ?>