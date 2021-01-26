<!-- QUESTION -->

<div class="col-xs-12 col-sm-9">
   
   <div class="form-group">
      
      <label for="question" class="required">Question</label>

      <?php if(Route::currentRouteName('') == 'admin.faqs.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $faq->question; ?>

         </div>

      <?php else: ?>
      
         <input
            type="text"
            name="question"
            id="question"
            class="form-control form-control-sm required <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            value="<?php echo e(old('question') ?? $faq->question); ?>"
            autofocus
            onfocus="this.focus();this.select()">
            
      <?php endif; ?>
      
      <?php $__errorArgs = ['question'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/forms/fields/general/question.blade.php ENDPATH**/ ?>