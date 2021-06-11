<div class="col-xs-12 col-sm-5">

   <label for="jobSheet">
   	Job Sheet
   </label>

	<span class="float-right">
   	<?php if($carving->jobSheet): ?>
         <?php if(Route::currentRouteName('') != 'admin.carvings.show'): ?>
			   <?php echo e($carving->jobSheet); ?>

         <?php endif; ?>
		<?php endif; ?>
	</span>

	<div class="input-group input-group-sm">

      <?php if(Route::currentRouteName('') == 'admin.carvings.show'): ?>

         <div class="col p-1 m-0 bg-gray-light border">
            <?php echo $carving->jobSheet ?? 'N/A'; ?>

         </div>

      <?php else: ?>

    	 <input type="file" name="jobSheet" value="<?php echo e(old('jobSheet') ?? $carving->jobSheet); ?>" class="form-control form-control-sm">
   	

      <?php endif; ?>
      
   </div>

   <?php if(Route::currentRouteName('') != 'admin.carvings.show'): ?>
      <small id="jobSheetHelpBlock" class="form-text text-muted">
          Only choose new file to replace existing one.
      </small>
   <?php endif; ?>
    

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/jobSheet.blade.php ENDPATH**/ ?>