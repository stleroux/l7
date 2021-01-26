<form action="" method="POST" class="">
   <?php echo csrf_field(); ?>
   <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" class="bg-primary" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-primary mt-2"
      id="btn_multirestore"
      style="display:none"
      data-target="#massRestore-modal">
      <i class="<?php echo e(config('icons.restore')); ?>"></i>
      Restore Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/mass/restore.blade.php ENDPATH**/ ?>