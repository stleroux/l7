<form action="<?php echo e(route('admin.categories.mass_delete')); ?>" method="post" class="mt-2">
   <?php echo csrf_field(); ?>
   <?php echo method_field('DELETE'); ?>
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="fas fa-trash nav-icon"></i>
      Delete Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/actions/mass/delete.blade.php ENDPATH**/ ?>