<!-- USERS -->

<?php if(Auth::user()->can('user-manage') || Auth::user()->hasRole('admin')): ?>

   <div class="col col-md-6 col-xl-12">
      <a href="<?php echo e(route('admin.users.index')); ?>">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-2">
               <i class="<?php echo e(config('icons.users')); ?>"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Users</span>
               <span class="info-box-text">
                  Active : <?php echo e($usersActiveCount); ?>

                  <br />
                  Inactive : <?php echo e($usersInactiveCount); ?>              
               </span>
               <span class="info-box-number">
                  Total : <?php echo e($usersTotalCount); ?>

               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/infoBoxes/users.blade.php ENDPATH**/ ?>