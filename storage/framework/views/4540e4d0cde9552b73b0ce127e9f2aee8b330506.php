<li class="nav-item dropdown user user-menu">
   
   <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
      <img src="<?php echo e(asset('/dist/img/user2-160x160.jpg')); ?>" class="user-image img-circle elevation-2" alt="User Image">
      <span class="hidden-xs"><?php echo e(auth::user()->first_name); ?> <?php echo e(auth::user()->last_name); ?></span>
      <i class="fas fa-fw fa-caret-down"></i>
   </a>
   
   <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header bg-primary">
         <img src="<?php echo e(asset('/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">

         <div class="mb-0">
         	<p><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?> (<?php echo e(Auth::user()->username); ?>)</p>
            <p><?php echo e(Auth::user()->email); ?></p>
            <p>
               <?php $__currentLoopData = Auth::user()->roles->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e(ucfirst($role)); ?>

                  <?php if(!$loop->last): ?>
                     <?php echo e('-'); ?>

                  <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
            <p>
               <small>Member since <?php echo e(Auth::user()->created_at->toFormattedDateString()); ?></small>
            </p>
               
         </div>
      </li>

      <!-- Menu Body -->
      <li class="user-body">
         <div class="row">
            <div class="col-4 text-center">
               <a href="#">Followers</a>
            </div>
            <div class="col-4 text-center">
               <a href="#">Sales</a>
            </div>
            <div class="col-4 text-center">
               <a href="#">Friends</a>
            </div>
         </div>
         <!-- /.row -->
      </li>

      <!-- Menu Footer-->
      <li class="user-footer">
         
         
         <div class="form-row pb-1">
            <div class="col pt-1">
               <a href="<?php echo e(route('features.create')); ?>" class="btn btn-outline-secondary btn-xs btn-block mt-0">
   			      <i class="<?php echo e(config('icons.feature')); ?> text-success"></i>
   			      Request A Feature
   		       </a>
            </div>
         
            <div class="col">
               <a href="<?php echo e(route('features.index')); ?>" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  My Requests
               </a>
            </div>
         </div>

         
         <div class="form-row pb-1">
            <div class="col">
               <a href="<?php echo e(route('bugs.create')); ?>" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  Report A Bug
               </a>
            </div>
            <div class="col">
               <a href="<?php echo e(route('bugs.index')); ?>" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  My Bug Reports
               </a>
            </div>
         </div>

         
         
            
               
            

         
         <div class="form-row pb-1">
            <div class="col">
               <a href="<?php echo e(route('profile.show', Auth::user()->id)); ?>" class="btn btn-outline-primary btn-xs btn-block mt-1">
                  View Profile
               </a>
            </div>

            <div class="col">
               <a href="<?php echo e(route('profile.edit', Auth::user()->id)); ?>" class="btn btn-outline-primary btn-xs btn-block mt-1">
               	Edit Profile
               </a>
            </div>
         </div>

         <div class="form-row">
            <div class="col">
            	<a href="<?php echo e(route('profile.resetPwd', Auth::user()->id)); ?>" class="btn btn-outline-primary btn-xs btn-block mt-1">
            		Change Password
      	     </a>
           </div>
        </div>

        

         <a class="btn btn-outline-danger btn-sm btn-block mt-3" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

         </a>

         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
         </form>


      </li>

   </ul>

</li>

<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/common/navbar/user.blade.php ENDPATH**/ ?>