<div class="card card-primary">

   <div class="card-header">
      <div class="card-title">Tag Information</div>
   </div>

   <div class="card-body">
      <div class="row">
         <?php echo $__env->make('admin.tags.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.tags.forms.fields.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div> <!-- Card body -->

</div><!-- Card --><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/forms/form.blade.php ENDPATH**/ ?>