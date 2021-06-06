<div class="col-xs-12 col-sm-5">

   <label for="jobSheet">
   		Job Sheet
   	</label>

	<span class="float-right">
   		<?php if($carving->jobSheet): ?>
			<?php echo e($carving->jobSheet); ?>				
		<?php endif; ?>
	</span>

   	<div class="input-group input-group-sm">

      

    	<input type="file" name="jobSheet" value="<?php echo e(old('jobSheet') ?? $carving->jobSheet); ?>" class="form-control form-control-sm">
   	</div>
    
    <small id="jobSheetHelpBlock" class="form-text text-muted">
    	Only choose new file to replace existing one.
	</small>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others/jobSheet.blade.php ENDPATH**/ ?>