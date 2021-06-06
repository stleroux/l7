

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

   <?php echo $__env->make('UI.mylinks.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               <?php if($userlinks->count() > 0): ?>

                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           
                           <th>Name</th>
                           <th>Page URL</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort text-right" width="200px">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php $__currentLoopData = $userlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              
                              <td nowrap="nowrap">
                                 
                                 
                                 <?php echo e($link->name); ?>

                              </td>
                              <td><?php echo e($link->page_url); ?></td>
                              <td class="d-none d-lg-table-cell" nowrap="nowrap" title="<?php if($link->created_at): ?><?php echo e($link->created_at); ?><?php endif; ?>"><?php echo e($link->created_at->toDateString()); ?></td>
                              
                              <td class="d-none d-lg-table-cell" title="<?php if($link->updated_at): ?><?php echo e($link->updated_at); ?><?php endif; ?>"><?php echo e($link->updated_at->toDateString()); ?></td>
                              
                              <td class="text-right">
                                 <?php echo $__env->make('UI.myLinks.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

   <?php echo $__env->make('modals.destroy', ['modelName'=>'mylink'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('help.index', ['title'=>'My Links', 'icon'=>'', 'path'=>'UI.mylinks.index'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/myLinks/index.blade.php ENDPATH**/ ?>