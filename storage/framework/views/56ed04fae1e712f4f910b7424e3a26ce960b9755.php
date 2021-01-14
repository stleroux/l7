<?php if(Session::get('fromPage')): ?>
   <a href="<?php echo e(Session::get('fromPage')); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon d-print-none"
      title="Back">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      
      <div class="d-none d-lg-inline">
         <?php echo e($btn_label ?? ''); ?>

      </div>
   </a>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/buttons/back.blade.php ENDPATH**/ ?>