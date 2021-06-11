<div class="row-col mb-2 text-right">
   

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

   <a href="<?php echo e(route('bugs.index')); ?>"
      class="btn btn-sm btn-light border">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="<?php echo e(config('icons.help')); ?>"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/bugs/edit/topbar.blade.php ENDPATH**/ ?>