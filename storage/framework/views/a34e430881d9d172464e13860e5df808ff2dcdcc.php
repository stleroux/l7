<div id="addImage" class="col-10 offset-1 pt-2" style="display: none;">
   <div class="card card-outline card-primary mb-2">
      <div class="card-header p-2">Add Image</div>
      <div class="card-body p-3">
         <form action="<?php echo e(route('projects.image.store', $project->id)); ?>" method="post" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>

            <!-- IMAGE -->
            <div class="form-group pb-2 mb-0">
               <label for="image" class="required">Image</label>
               <input type="file" name="image" class="form-control form-control-sm p-0">
               <div class="pl-1 bg-danger"><?php echo e($errors->first('image')); ?></div>
            </div>

            <!-- DISPLAY NAME -->
            <div class="form-group pb-2 mb-0">
               <label for="display_name" class="required">Display Name</label>
               <input type="text" name="display_name" class="form-control form-control-sm p-0">
               <div class="pl-1 bg-danger"><?php echo e($errors->first('display_name')); ?></div>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group pb-2 mb-0">
               <label for="image_description" class="required">Description</label>
               <textarea name="image_description" id="image_description" cols="20" rows="4" class="form-control form-control-sm p-0"></textarea>
               <div class="pl-1 bg-danger"><?php echo e($errors->first('image_description')); ?></div>
            </div>

            <div class="form-group pb-0 mb-0">
               <button type="submit" class="btn btn-sm btn-secondary btn-block">Add</button>
            </div>

         </form>
      </div>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/fields/images/addImage.blade.php ENDPATH**/ ?>