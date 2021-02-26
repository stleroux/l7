<?php $__env->startSection('title', 'Print Recipe'); ?>

<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="row">
      <div class="col">
         <span class="float-right">
            <div class="btn-group bg-light border">
               
               <a href="<?php echo e(url()->previous()); ?>" class="btn btn-xs btn-maroon d-print-none">Back</a>
               <?php echo $__env->make('UI.recipes.buttons.print2', ['size'=>'xs', 'btn_label'=>'Print'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </span>
      </div>
   </div>

   <div class="card" style="page-break-after: always">
   
      <div class="card-header bg-dark">
         <div class="row">
            <div class="col">
               <div class="h3"><?php echo e(ucwords($recipe->title)); ?></div>
            </div>
            <div class="">
               <small class="text-right">From the Recipe Book at TheWoodBarn.ca</small>
            </div>
         </div>
      </div>


   
      <div class="card-body p-1">

         <div class="card mb-2 p-0">

            

            <table class="table table-sm table-bordered mb-0">
               <tr class="text-center">
                  <th>Category</th>
                  <th>Servings</th>
                  <th>Prep Time</th>
                  <th>Cook Time</th>
                  <th>Created By</th>
                  <th>Created On</th>
                  <th>Source</th>
               </tr>
               <tr class="text-center">
                  <td><?php echo e(ucwords($recipe->category->name)); ?></td>
                  <td><?php echo e($recipe->servings); ?></td>
                  <td><?php echo e($recipe->prep_time_minutes); ?> minutes</td>
                  <td><?php echo e($recipe->cook_time); ?> minutes</td>
                  <td><?php echo e($recipe->user->first_name); ?> <?php echo e($recipe->user->last_name); ?></td>
                  <td><?php echo e($recipe->created_at); ?></td>
                  <td>
                     <?php if($recipe->source): ?>
                        <?php echo e($recipe->source); ?>

                     <?php else: ?>
                        N/A
                     <?php endif; ?>
                  </td>
               </tr>
            </table>

         </div>

         <div class="row">
            <div class="col-12 col-sm-8">
               <div class="card mb-2">
                  <div class="card-header bg-secondary p-1">Ingredients</div>
                  <div class="card-body p-1">
                     <?php echo $ingredients = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->ingredients); ?>

                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-4">
               <div class="card mb-2 p-0">
                  <div class="card-header bg-secondary p-1">Image</div>
                  <div class="card-body text text-center p-0 m-0">
                     <?php if($recipe->image): ?>
                        <img src="/_recipes/<?php echo e($recipe->image); ?>" alt="" height="200px" width="auto" class="card-img">
                     <?php else: ?>
                        <img src="/_recipes/image_not_available.jpg" alt="" height="200px" width="auto" class="card-img">
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="row">
            <div class="col-12">
               <div class="card mb-2">
                  <div class="card-header bg-secondary p-1">Methodology</div>
                  <div class="card-body p-1">
                     <?php echo $recipe->methodology = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->methodology); ?>

                  </div>
               </div>
               <div class="card" style="margin-bottom: 0px">
                  <div class="card-header bg-secondary p-1">Notes</div>
                  <div class="card-body p-1">
                     <?php if($recipe->public_notes): ?> 
                        <?php echo $recipe->public_notes = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->public_notes); ?>

                     <?php else: ?>
                        N/A
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>

      </div><!-- End of Main Card body -->
   
   </div><!-- End of Main Card -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/print.blade.php ENDPATH**/ ?>