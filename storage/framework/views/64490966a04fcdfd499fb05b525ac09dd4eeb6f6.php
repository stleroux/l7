

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
      My Bug Reports
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Bug Reports</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.bugs.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               <?php if($bugs->count() > 0): ?>


                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           
                           <th>Title</th>
                           <th>Status</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort text-right" width="200px">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php $__currentLoopData = $bugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              
                              <td nowrap="nowrap">
                                 
                                 
                                 <?php echo e($bug->title); ?>

                              </td>
                              <td><?php echo e($bug->status); ?></td>
                              <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($bug->created_at): ?><?php echo e($bug->created_at); ?><?php endif; ?>"><?php echo e($bug->created_at->toDateString()); ?></td>
                              <td class="d-none d-lg-table-cell" title="<?php if($bug->updated_at): ?><?php echo e($bug->updated_at); ?><?php endif; ?>"><?php echo e($bug->updated_at->toDateString()); ?></td>
                              <td class="text-right">
                                 <?php echo $__env->make('UI.bugs.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

   <?php echo $__env->make('modals.destroy', ['modelName'=>'bug'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('help.index', ['title'=>'Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.index'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/bugs/index.blade.php ENDPATH**/ ?>