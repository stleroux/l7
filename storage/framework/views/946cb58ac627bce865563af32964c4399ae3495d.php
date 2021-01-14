<!-- Authentication Links -->
<li class="nav-item">
   <a class="nav-link" href="<?php echo e(route('login')); ?>">
   	<i class="<?php echo e(config('icons.login')); ?>"></i>
   	<?php echo e(__('Login')); ?>

   </a>
</li>

<?php if(Route::has('register')): ?>
   <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('register')); ?>">
      	<i class="<?php echo e(config('icons.register')); ?>"></i>
   		<?php echo e(__('Register')); ?>

   	</a>
   </li>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/navbar/right/authLinks.blade.php ENDPATH**/ ?>