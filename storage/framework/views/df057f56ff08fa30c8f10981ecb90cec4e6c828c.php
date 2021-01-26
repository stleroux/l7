
   


      
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            <?php echo $__env->make('admin.recipes.forms.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="card-body">
            <div class="tab-content" id="recipe-tabContent">
               <?php echo $__env->make('admin.recipes.forms.tabs.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.recipes.forms.tabs.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.recipes.forms.tabs.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.recipes.forms.tabs.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.recipes.forms.tabs.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <!-- /.card -->
      </div>

   <?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/forms/form.blade.php ENDPATH**/ ?>