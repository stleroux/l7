<form method="POST">
   <?php echo csrf_field(); ?>
   
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger mt-2"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="<?php echo e(config('icons.delete')); ?>"></i>
      Delete Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/mass/delete.blade.php ENDPATH**/ ?>