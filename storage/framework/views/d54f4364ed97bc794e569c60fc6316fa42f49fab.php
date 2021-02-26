<form action="<?php echo e(route('admin.users.mass_approve')); ?>" method="post" class="">
   <?php echo csrf_field(); ?>
   
   <input type="hidden" name="mass_approve_ids" id="mass_approve_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-default mt-2"
      id="btn_multiapprove"
      style="display:none"
      data-target="#massApprove-modal">
      <i class="<?php echo e(config('icons.approve')); ?>"></i>
      Approve Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/mass/approve.blade.php ENDPATH**/ ?>