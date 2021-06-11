<!-------------------------------------------------------------------------------------------------------------
ACTIONS EXPLAINED
-------------------------------------------------------------------------------------------------------------->
<div class="card mb-2">
   <div class="card-header bg-info p-1">Actions Explained</div>
   <div class="card-body p-1">

      <?php echo $__env->make('help.UI._common_.save_and_close_button', ['name'=>'Bug Report'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('help.UI._common_.save_and_continue_button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('help.UI._common_.save_and_new_button', ['name'=>'Bug Report'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('help.UI._common_.reset_form_button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('help.UI._common_.cancel_button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('help.UI._common_.help_button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/help/UI/bugs/create/actions.blade.php ENDPATH**/ ?>