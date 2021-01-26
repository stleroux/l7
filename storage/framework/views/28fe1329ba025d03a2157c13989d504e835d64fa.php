
<div class="card card-trans-2 mb-2">

   <div class="card-header bg-primary p-2">
      Account Information
   </div>

   <div class="card-body p-2">
      <?php echo $__env->make('admin.users.form.fields.previous_login_date', ['label'=>'Previous Login', 'disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.users.form.fields.last_login_date', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.users.form.fields.login_count', ['disabled'=>'disabled'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/profile/show/account.blade.php ENDPATH**/ ?>