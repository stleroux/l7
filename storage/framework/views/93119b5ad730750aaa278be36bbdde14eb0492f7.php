

<form action="" method="POST">
   <?php echo csrf_field(); ?>
   <input type="hidden" name="mass_resetViews_ids" id="mass_resetViews_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-block btn-default mt-2"
      id="btn_multiresetViews"
      style="display:none"
      data-target="#massResetViews-modal">
      <i class="<?php echo e(config('icons.resetViews')); ?>"></i>
      Reset Views for Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/mass/resetViews.blade.php ENDPATH**/ ?>