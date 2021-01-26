<form action="<?php echo e(route('admin.users.mass_disable')); ?>" method="post" class="">
   <?php echo csrf_field(); ?>
   
   <input type="hidden" name="mass_disable_ids" id="mass_disable_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-pink mt-2"
      id="btn_multidisable"
      style="display:none"
      data-target="#massDisable-modal">
      <i class="<?php echo e(config('icons.disabled')); ?>"></i>
      Disable Selected Users
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/actions/mass/disable.blade.php ENDPATH**/ ?>