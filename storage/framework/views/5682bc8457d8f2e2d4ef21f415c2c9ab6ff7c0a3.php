<form action="" method="POST" class="">
   <?php echo csrf_field(); ?>
   <input type="hidden" name="mass_publish_ids" id="mass_publish_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-block btn-outline-warning mt-2"
      id="btn_multipublish"
      style="display:none"
      data-target="#massPublish-modal">
      <i class="<?php echo e(config('icons.publish')); ?>"></i>
      Publish Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/sections/functions/actions/publish.blade.php ENDPATH**/ ?>