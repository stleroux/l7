
   <li class="nav-item mb-0">
      <a class="nav-link ml-2 mb-0 <?php echo e(Route::is('cart') ? 'bg-steel-light text-light' : ''); ?>" href="<?php echo e(route('cart')); ?>">
         <i class="<?php echo e(config('icons.cart')); ?>"></i>
         Quote Request
         <span class="badge badge-success">
            
            <?php echo e(Cart::count()); ?>

            
            
         </span>
      </a>
   </li>

<?php /**PATH C:\sites\l7\resources\views/layouts/UI/common/cart.blade.php ENDPATH**/ ?>