
<div class="card card-primary mb-2">

   <div class="card-header p-1 <?php echo e(($errors->first('finish')) ? 'bg-danger' : 'card_header'); ?>" id="showAddFinish">
      Finishes Information
      <a class="btn btn-xs float-right">
         <i id="icon" class="fas fa-sort-down"></i>
      </a>
   </div>
   
   <div class="card-body section_body p-0">
   
      <div class="form-row">
   
         <div id="addFinish" class="col-10 offset-1 pt-2" style="display: none;">
            <div class="card card-outline card-primary mb-2">
               <div class="card-header p-2">Add Finish</div>
               <div class="card-body p-3">
                  <form action="<?php echo e(route('projects.finish.store', $project->id)); ?>" method="post">
                     <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                     
                     <div class="form-group pb-2 mb-0">
                        <select name="finish" id="finish" class="form-control form-control-sm">
                           <option value="">Select</option>
                           <?php $__currentLoopData = $finishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $finish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($finish->id); ?>"><?php echo e($finish->name); ?> - <?php echo e($finish->sheen); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pl-1 bg-danger"><?php echo e($errors->first('finish')); ?></div>
                     </div>
                     
                     <div class="form-group pb-0 mb-0">
                        <button type="submit" class="btn btn-sm btn-secondary btn-block">Add</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>

         <div id="addFinish" class="col-xs-12 col-md-12">
            <?php if($project->finishes()->count() > 0): ?>
               <table class="table table-sm table-hover table-striped mb-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Finish</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $project->finishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($key+1); ?></td>
                           <td><?php echo e($value->name); ?> - <?php echo e($value->sheen); ?></td>
                           <td>
                              <form action="<?php echo e(route('projects.finish.delete', $value->id)); ?>" method="POST" class="float-right m-0 p-0">
                                 <?php echo e(csrf_field()); ?>

                                 <?php echo e(method_field('DELETE')); ?>

                                 <input type="hidden" value="<?php echo e($project->id); ?>" name="project_id">
                                 <button type="submit" class="btn btn-xs btn-danger">
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
<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/fields/finishes/finishes.blade.php ENDPATH**/ ?>