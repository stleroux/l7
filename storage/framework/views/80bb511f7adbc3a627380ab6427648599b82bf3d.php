<!-- PERMISSIONS -->
<div class="card card-warning">
   <div class="card-header p-2">
      User will automatically receive all abilities on their own records.
      <br />
      Only select the permissions to allow non owners the abilities on ALL records.
   </div>
</div>


<div class="card card-info">

   <div class="card-header p-2">
      
      Permissions
      
   </div>

   <div class="card-body py-0">
      <div class="row my-2">
         <a href="#" type="button" class="btn btn-sm btn-primary check mr-1">
            <i class="<?php echo e(config('icons.checked')); ?>"></i>
            Check All
         </a>
         <a href="#" class="btn btn-sm btn-primary uncheck">
            <i class="<?php echo e(config('icons.unchecked')); ?>"></i>
            UnCheck All
         </a>
      </div>
         
      <div class="row mb-0">
             
         <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission => $bulk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
            <div class="card card-outline card-primary col-lg-3 col-md-4">
                      
               <div class="card-header p-2">
                  
                  <?php echo e(strtoupper($permission)); ?>

                  
               </div>
                      
               <div class="card-body p-2">
                      
                  <?php $__currentLoopData = $bulk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                     <div class="icheck-primary d-inline">
                                    
                        <input name="permissions[]" type="checkbox" id="<?php echo e($perm->id); ?>" value="<?php echo e($perm->id); ?>" <?php if($role->permissions->pluck('id')->contains($perm->id)): ?> checked <?php endif; ?> class="questionCheckBox">
                                    
                        <label for="<?php echo e($perm->id); ?>" style="font-weight: normal">
                           <?php echo e(trim(ucfirst(explode('-', $perm->name)[1]))); ?>

                        </label>

                     </div>

                     <br />
                               
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
               </div>
                  
            </div>
             
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
      </div>
    
   </div>

</div>

<?php $__env->startSection('scripts'); ?>
   <script>
      $(function () {
         $('.check').on('click', function () {
            $('.questionCheckBox').each(function(){ this.checked = true; });
         });
      });

      $(function () {
         $('.uncheck').on('click', function () {
            $('.questionCheckBox').each(function(){ this.checked = false; });
         });
      });
   </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\sites\l7\resources\views/admin/roles/forms/fields/permissions.blade.php ENDPATH**/ ?>