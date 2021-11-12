<div class="form-group">
   <label for="subject" class="">Cart Items</label>
   <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>
         <?php echo e($row->qty); ?> x <?php echo e($row->name); ?>         
      </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/contactForm/fields/cart/items.blade.php ENDPATH**/ ?>