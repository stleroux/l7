
<?php if(auth()->guard()->check()): ?>
   <?php if(auth::user()->login_count <= config('settings.loginCountWarning')): ?>
      <div class="card card-trans-0 mb-2 border-red-2">

         <div class="card-header section_header p-2">
            <i class="<?php echo e(config('icons.user')); ?>"></i>
            <?php echo e($newUser->title); ?>

         </div>
         
         <div class="card-body card-trans-4 p-2">
            <?php echo $newUser->body; ?>

         </div>

      </div>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/homepage/newUser.blade.php ENDPATH**/ ?>