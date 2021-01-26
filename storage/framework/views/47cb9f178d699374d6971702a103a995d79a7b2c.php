
<?php if(auth()->guard()->check()): ?>
   <?php if(
      (Auth::user()->first_name == '') OR
      (Auth::user()->last_name == '') OR
      (Auth::user()->email == '')): ?>
         <div class="card mb-2 card-trans-0 border-red-2">

            <div class="card-header text-white bg-danger p-2">
               <i class="fa fa-exclamation" aria-hidden="true"></i>
               Your user profile is incomplete!
            </div>

            <div class="card-body card-trans-2 text-white p-2">
               Please rectify this oversight by clicking <a href="<?php echo e(route('profile.edit', Auth::user()->id)); ?>" class="btn btn-xs btn-default">here</a>
            </div>
         </div>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/homepage/warning.blade.php ENDPATH**/ ?>