<div class="card card-trans-2 mb-2">
   <div class="card-header bg-primary p-2">Profile Image</div>
   <div class="card-body section_body p-2">
      <div class="form-row">
         <div class="col text-center">
            <?php if(Auth::user()->image): ?>
               <img src="/_profiles/<?php echo e(Auth::user()->image); ?>" height="125px" width="125px" alt="" />
            <?php else: ?>
               <img src="/_profiles/no_photo.jpg" height="125px" width="125px" alt="" />
            <?php endif; ?>
         </div>
      </div>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/profile/show/image.blade.php ENDPATH**/ ?>