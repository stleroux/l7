<form action="<?php echo e(route('admin.carvings.mass_delete')); ?>" method="post" class="">
   <?php echo csrf_field(); ?>
   <?php echo method_field('DELETE'); ?>
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger mt-2"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="<?php echo e(config('icons.delete')); ?>"></i>
      Delete Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions/mass/delete.blade.php ENDPATH**/ ?>