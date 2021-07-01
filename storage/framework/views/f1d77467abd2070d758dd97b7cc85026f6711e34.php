<li class="nav-item">
   <a class="nav-link" href="<?php echo e(route('cart')); ?>">
      <i class="<?php echo e(config('icons.cart')); ?>"></i>
      Cart
      <span class="badge badge-secondary">
         
         <?php echo e(Cart::count()); ?>

         
         
      </span>
   </a>
</li><?php /**PATH C:\sites\l7\resources\views/layouts/UI/common/cart.blade.php ENDPATH**/ ?>