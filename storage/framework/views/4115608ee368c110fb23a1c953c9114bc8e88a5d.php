
<?php if(auth()->guard()->guest()): ?>
   <div class="card card-trans-0 mb-2 border-red-2">

      <div class="card-header section_header p-2">
         <i class="<?php echo e(config('icons.ban')); ?>"></i>
         <?php echo e($nonRegistered->title); ?>

      </div>

      <div class="card-body card-trans-4 p-2">
         <?php echo $nonRegistered->body; ?>

      </div>

   </div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/homepage/nonRegistered.blade.php ENDPATH**/ ?>