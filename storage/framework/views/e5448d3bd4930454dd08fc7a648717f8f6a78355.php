<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Shop Time <small>(Hrs)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      <input type="text" name="time_invested" value="<?php echo e(old('time_invested') ?? $project->time_invested); ?>" class="form-control form-control-sm">

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/forms/fields/others/shopTime.blade.php ENDPATH**/ ?>