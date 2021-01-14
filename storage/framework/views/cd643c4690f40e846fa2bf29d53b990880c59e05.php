<!-- EDIT IMAGE MODAL -->
<div class="modal bg-secondary" id="editImageModal<?php echo e($image->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editImageModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content text-dark">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Image Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="<?php echo e(route('projects.image.update', $image->id)); ?>" method="post" >
               <?php echo csrf_field(); ?>
               <?php echo method_field('put'); ?>

               <!-- DISPLAY NAME -->
               <div class="form-group pb-2 mb-0">
                  <label for="display_name" class="required">Display Name</label>
                  <input type="text" name="display_name" class="form-control form-control-sm p-0" value="<?php echo e($image->display_name); ?>">
                  <div class="pl-1 bg-danger"><?php echo e($errors->first('display_name')); ?></div>
               </div>

               <!-- DESCRIPTION -->
               <div class="form-group pb-2 mb-0">
                  <label for="image_description" class="required">Description</label>
                  <textarea name="image_description" id="image_description" cols="20" rows="4" class="form-control form-control-sm p-0"><?php echo e($image->description); ?></textarea>
                  <div class="pl-1 bg-danger"><?php echo e($errors->first('image_description')); ?></div>
               </div>

               <div class="form-group pb-0 mb-0 float-right">
                  <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-sm btn-primary">Update</button>
               </div>

            </form>
         </div>
      </div>
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/fields/images/editImageModal.blade.php ENDPATH**/ ?>