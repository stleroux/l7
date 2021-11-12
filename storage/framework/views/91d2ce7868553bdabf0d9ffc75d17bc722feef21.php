<?php if(auth()->guard()->check()): ?>
   <?php if(Auth::user()->hasAnyRoles(['admin','customOrdering'])): ?>
      <div class="card mb-2 card-trans-4 bg-warning">
         
         <div class="card-header p-2">
            <i class="<?php echo e(Config::get('icons.')); ?>"></i>
            Custom Ordering
         </div>
         
         <div class="card-body card-trans-6 p-0 m-0">

            <a href="<?php echo e(route('carvings.customOrder.create')); ?>" class="card-trans-2 list-group-item list-group-item-action p-1">
               Place a Custom Order
            </a>

         </div>

      </div>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/blocks/customOrder.blade.php ENDPATH**/ ?>