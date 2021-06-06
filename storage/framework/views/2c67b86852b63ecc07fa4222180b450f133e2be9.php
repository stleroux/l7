
<div class="card card-primary mb-2">

   <div class="card-header p-2 <?php echo e((($errors->first('image')) || $errors->first('display_name') || $errors->first('image_description')) ? 'bg-danger' : 'card_header'); ?>" id="showAddImage">
      Images Information
      <a class="btn btn-xs float-right">
         <i id="icon" class="fas fa-sort-down"></i>
      </a>
   </div>
   
   <div class="card-body p-0">
   
      <div class="form-row">
   
         <?php echo $__env->make('admin.carvings.forms.fields.images.addImage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <div id="addImage" class="col-xs-12 col-md-12">
            <?php if(count($carving->images) > 0): ?>
               <table class="table table-sm table-hover table-striped mb-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Image Name</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $carving->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($key+1); ?></td>
                           <td><?php echo e($image->display_name); ?></td>
                           <td>
                              
                              <form action="<?php echo e(route('admin.carvings.image.delete', $image->id)); ?>" method="POST" class="float-right m-0 p-0">
                                 <?php echo e(csrf_field()); ?>

                                 <?php echo e(method_field('DELETE')); ?>

                                 <input type="hidden" value="<?php echo e($carving->id); ?>" name="carving_id">
                                 <div class="btn-group">
                                    <a href="javascript:;"
                                       data-href="/_carvings/<?php echo e($image->carving_id); ?>/<?php echo e($image->name); ?>"
                                       data-name="<?php echo e($image->display_name); ?>"
                                       data-description="<?php echo e($image->description); ?>"
                                       class="openmodal btn btn-xs btn-info">
                                       <i class="<?php echo e(config('icons.view')); ?>"></i>
                                    </a>

                                    <a class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#editImageModal<?php echo e($image->id); ?>">
                                      <i class="<?php echo e(config('icons.edit')); ?>"></i>
                                    </a>

                                    <button
                                       type="submit"
                                       class="btn btn-xs btn-danger text-light"
                                       onclick="return confirm('Are you sure?')">
                                       <i class="fa fa-trash"></i>
                                    </button>
                                 </div>
                              </form>
                              
                              <?php echo $__env->make('admin.carvings.forms.fields.images.editImageModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                           </td>
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
            <?php else: ?>
               <div class="p-2">
                  No entries found
               </div>
            <?php endif; ?>
         </div>

      </div>

   </div>

</div>

<?php echo $__env->make('admin.carvings.forms.fields.images.displayImageModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/images/images.blade.php ENDPATH**/ ?>