<div class="row mb-2 text-right">
   <div class="col">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update">
      <i class="<?php echo e(config('icons.update')); ?>"></i>
      <div class="d-none d-lg-inline">
         Update
      </div>
   </button>
   
   

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="<?php echo e(config('icons.reset')); ?>"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="<?php echo e(route('mylinks.index')); ?>"
      class="btn btn-sm btn-light border">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      <div class="d-none d-lg-inline">
         Back
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="<?php echo e(config('icons.help')); ?>"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>
</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/mylinks/edit/topbar.blade.php ENDPATH**/ ?>