

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/recipes.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.recipes')); ?>"></i>
	Recipes
	<?php if($byCatName): ?>
		:: <?php echo e(deliciousCamelcase(ucwords($byCatName->name))); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item">Recipes</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
	<?php echo $__env->make('UI.recipes.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('UI.recipes.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.recipes.blocks.faqs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('UI.recipes.index.list.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php if($recipes->count() > 0): ?>
	  
     <div class="card card-trans-2 mb-3">

         <div class="card-body card-trans-2 p-2 text-light">

            <?php echo $__env->make('UI.recipes.index.list.alphabet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <table id="datatable" class="table table-sm table-hover">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Category</th>
                     <th class="d-none d-lg-table-cell">Views</th>
                     <th class="d-none d-lg-table-cell">Created By</th>
                     <th class="d-none d-lg-table-cell">Created On</th>
                     <th class="d-none d-lg-table-cell">Publish(ed) On</th>
                     <th data-orderable="false"></th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td>
                           <?php echo e(ucwords($recipe->title)); ?>

                        </td>
                        <td>
                           <?php echo e(ucwords($recipe->category->name)); ?>

                        </td>
                        <td class="d-none d-lg-table-cell">
                           <?php echo e($recipe->views); ?>

                        </td>
                        <td class="d-none d-lg-table-cell">
                           <?php echo $__env->make('common.authorFormat', ['model'=>$recipe, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                        <td class="d-none d-lg-table-cell">
                           <?php echo $__env->make('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                        <td class="d-none d-lg-table-cell">
                           <?php echo $__env->make('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                        <td class="text-right">
                           <div class="btn-group">
                              <?php if(auth()->guard()->check()): ?>
                                 <?php echo $__env->make('UI.recipes.index.list.buttons.favorite', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <?php endif; ?>
                              <?php echo $__env->make('UI.recipes.index.list.buttons.show', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           </div>
                        </td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         </div>
	  </div>

   <?php else: ?>

      <div class="col-row p-3 card-trans-4 text-light">
         <?php echo e(config('settings.noRecordsFound')); ?>

      </div>

   <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/recipes/index/list/index.blade.php ENDPATH**/ ?>