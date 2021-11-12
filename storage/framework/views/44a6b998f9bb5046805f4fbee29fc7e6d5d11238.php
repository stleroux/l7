<form action="" method="POST" style="display:inline-block">
   <?php echo csrf_field(); ?>
   <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-sm btn-outline-primary mt-0"
      id="btn_multirestore"
      style="display:none"
      data-target="#massRestore-modal">
      <i class="<?php echo e(config('icons.restore')); ?>"></i>
      Restore Selected
   </a>
</form>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/topbar/restore.blade.php ENDPATH**/ ?>