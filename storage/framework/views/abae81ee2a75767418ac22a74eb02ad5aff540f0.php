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
      <div class="form-row">
         <div class="col">
            <div class="input-group py-3">
               <label class="btn btn-sm btn-block btn-primary" for="image">
                  <input id="image" name="image" type="file" style="display:none" 
                     onchange="$('#upload-file-info').html(this.files[0].name)">
                  <?php if(!$user->image): ?>
                     Select Image
                  <?php else: ?>
                     Change Image
                  <?php endif; ?>
               </label>
               <span class='label label-info' id="upload-file-info"></span>
               <?php if($user->image): ?>
                  <a href="<?php echo e(route('profile.deleteImage', $user->id)); ?>" class="btn btn-sm btn-block btn-danger">Delete Image</a>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/profile/edit/image.blade.php ENDPATH**/ ?>