<form action="<?php echo e(route('admin.posts.mass_unpublish')); ?>" method="post" class="">
   <?php echo csrf_field(); ?>
   <input type="hidden" name="mass_unpublish_ids" id="mass_unpublish_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-warning mt-2"
      id="btn_multiunpublish"
      style="display:none"
      data-target="#massUnpublish-modal">
      <i class="<?php echo e(config('icons.unpublish')); ?>"></i>
      Unpublish Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/mass/unpublish.blade.php ENDPATH**/ ?>