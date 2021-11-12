

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/recipes.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   <i class="fas fa-fw fa-address-card" aria-hidden="true"></i>
   Recipe Archives for 
      <?php if($month == 1): ?> January 
      <?php elseif($month == 2): ?> February 
      <?php elseif($month == 3): ?> March 
      <?php elseif($month == 4): ?> April 
      <?php elseif($month == 5): ?> May 
      <?php elseif($month == 6): ?> June 
      <?php elseif($month == 7): ?> July 
      <?php elseif($month == 8): ?> August 
      <?php elseif($month == 9): ?> September 
      <?php elseif($month == 10): ?> October 
      <?php elseif($month == 11): ?> November 
      <?php elseif($month == 12): ?> December 
      <?php endif; ?>
      <?php echo e($year); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('recipes.indexGrid', 'all')); ?>">Recipes</a></li>
   <li class="breadcrumb-item">Archived Recipes</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.recipes.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.recipes.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="card card-trans-2 mb-3">
      
            
         
      <div class="card-body p-2 card-trans-2 text-light">
         <table id="datatable" class="table table-hover table-sm">
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Author</th>
                  <th>Create Date</th>
                  <th>Publish Date</th>
                  <th class="no-sort"></th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td><?php echo e($archive->title); ?></td>
                     <td><?php echo e(ucwords($archive->category->name)); ?></td>
                     <td><?php echo e($archive->views); ?></td>
                     <td>
                        <?php echo $__env->make('common.authorFormat', ['model'=>$archive, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </td>
                     <td><?php echo $__env->make('common.dateFormat', ['model'=>$archive, 'field'=>'created_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                     <td><?php echo $__env->make('common.dateFormat', ['model'=>$archive, 'field'=>'published_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                     <td class="text-right">
                        <a href="<?php echo e(route('recipes.show', $archive->id)); ?>" class="btn btn-sm btn-primary">
                           <i class="far fa-eye"></i>
                        </a>
                     </td>
                  </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/recipes/archives.blade.php ENDPATH**/ ?>