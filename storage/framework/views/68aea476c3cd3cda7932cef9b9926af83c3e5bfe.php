
<div class="card card-primary mb-2">

   <div class="card-header p-2 <?php echo e(($errors->first('material')) ? 'bg-danger' : 'card_header'); ?>" id="showAddMaterial">
      Materials Information
      <a class="btn btn-xs float-right">
         <i id="icon" class="fas fa-sort-down"></i>
      </a>
   </div>
   
   <div class="card-body section_body p-0">
   
      <div class="form-row">
   
         <div id="addMaterial" class="col-10 offset-1 pt-2" style="display: none;">
            <div class="card card-outline card-primary mb-2">
               <div class="card-header p-2">Add Material</div>
               <div class="card-body p-3">
                  <form action="<?php echo e(route('admin.carvings.material.store', $carving->id)); ?>" method="post">
                     <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>

                     <div class="form-group pb-2 mb-0">
                        <select name="material" id="material" class="form-control form-control-sm p-0">
                           <option value="">Select</option>
                           <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($material->id); ?>"><?php echo e($material->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pl-1 bg-danger"><?php echo e($errors->first('material')); ?></div>
                     </div>
                     
                     <div class="form-group pb-0 mb-0">
                        <button type="submit" class="btn btn-sm btn-secondary btn-block">Add</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>

         <div id="addMaterial" class="col-xs-12 col-md-12">
            <?php if($carving->materials()->count() > 0): ?>
               <table class="table table-sm table-hover table-striped mb-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Material</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $carving->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($key+1); ?></td>
                           <td><?php echo e($value->name); ?></td>
                           <td>
                              <form action="<?php echo e(route('admin.carvings.material.delete', $value->id)); ?>" method="POST" class="float-right m-0 p-0">
                                 <?php echo e(csrf_field()); ?>

                                 <?php echo e(method_field('DELETE')); ?>

                                 <input type="hidden" value="<?php echo e($carving->id); ?>" name="carving_id">
                                 <button
                                    type="submit"
                                    class="btn btn-xs btn-danger"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i>
                                 </button>
                              </form>
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
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/materials/materials.blade.php ENDPATH**/ ?>