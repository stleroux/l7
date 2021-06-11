<div class="col-xs-12 col-sm-6 col-md-4">
   
   <label for="completed_at">Completed Date</label>
   
   <div class="input-group input-group-sm">
   
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
         </span>
      </div>

      <?php if(Route::currentRouteName('') == 'admin.carvings.show'): ?>

         <div class="col p-1 m-0 bg-gray-light border">
            
            <?php if($carving->completed_at): ?>
               <?php echo e($carving->completed_at->format('M d, Y')); ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>

      <?php else: ?>

      
         
         
            
               
            
         
         
         <input type="text"
            name="completed_at"
            id="datePicker"
            value="<?php echo e(old('completed_at') ?? $carving->completed_at); ?>"
            class="form-control form-control-sm"
            autocomplete="off" 
         />

      


   <?php endif; ?>
      </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/completed.blade.php ENDPATH**/ ?>