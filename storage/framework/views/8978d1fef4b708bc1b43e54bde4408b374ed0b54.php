

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
      My Links
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">My Links</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               <?php if($links->count() > 0): ?>


                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           
                           <th>Name</th>
                           <th>URL</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort text-right" width="200px">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              
                              <td nowrap="nowrap">
                                 
                                 
                                 <?php echo e($link->name); ?>

                              </td>
                              <td><?php echo e($link->url); ?></td>
                              
                              <td><?php echo e($link->created_at); ?></td>
                              
                              <td><?php echo e($link->updated_at); ?></td>
                              <td class="text-right">
                                 <?php echo $__env->make('UI.links.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              </td>
                           </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>

               <?php else: ?>

                  <?php echo e(config('settings.noRecordsFound')); ?>

               
               <?php endif; ?>

            </div>

         </div>

      </div>

   </div>

   
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/links/index.blade.php ENDPATH**/ ?>