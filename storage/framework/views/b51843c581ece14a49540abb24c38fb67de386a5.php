<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.mass_destroy';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin.categories.mass_destroy';
   } else {
      $routeName = 'admin.'.$modelName.'s.mass_destroy';
   }
?>

<form action="<?php echo e(route($routeName)); ?>" method="post" style="display:inline-block">
   <?php echo csrf_field(); ?>
   <?php echo method_field('DELETE'); ?>
   <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-sm btn-outline-pink mt-0"
      id="btn_multidestroy"
      style="display:none"
      data-target="#massDestroy-modal">
      <i class="<?php echo e(config('icons.trash')); ?>"></i>
      Trash Selected
   </a>
</form>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/topbar/destroy.blade.php ENDPATH**/ ?>