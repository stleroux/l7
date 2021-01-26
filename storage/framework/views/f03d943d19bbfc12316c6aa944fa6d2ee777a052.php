<a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-block btn-light border" title="Cancel">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   <div class="d-none d-lg-inline">
      Cancel
   </div>
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="update" title="Update and Close">
         <i class="<?php echo e(config('icons.update')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Close
         </div>
      </button>

      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue" title="Update and Continue">
         <i class="<?php echo e(config('icons.update_continue')); ?>"></i>
         <div class="d-none d-lg-inline">
            Update and Continue
         </div>
      </button>

      <button type="reset" class="btn btn-block btn-light border" title="Reset Form">
         <i class="<?php echo e(config('icons.reset')); ?>"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

      <hr />

      <?php if($user->account_status): ?>
         <a href="<?php echo e(route('admin.users.disable', $user)); ?>" class="btn btn-block btn-outline-pink">
            <i class="<?php echo e(config('icons.disable')); ?>"></i>
            Disable Account
         </a>
      <?php else: ?>
         <a href="<?php echo e(route('admin.users.approve', $user)); ?>" class="btn btn-block btn-outline-primary">
            <i class="<?php echo e(config('icons.approve')); ?>"></i>
            Enable Account
         </a>
      <?php endif; ?>
   
   </div>
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/edit/sections/functions/actions.blade.php ENDPATH**/ ?>