<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary card-outline card-outline-tabs">
   
   <div class="card-header p-0 border-bottom-0">
      <?php echo $__env->make('admin.posts.forms.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

   <div class="card-body">
      <div class="tab-content" id="recipe-tabContent">
         <?php echo $__env->make('admin.posts.forms.tabs.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.posts.forms.tabs.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.posts.forms.tabs.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.posts.forms.tabs.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.posts.forms.tabs.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>
   <!-- /.card -->
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/posts/forms/form.blade.php ENDPATH**/ ?>