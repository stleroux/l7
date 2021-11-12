

<?php $__env->startSection('stylesheet'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.search')); ?>"></i>
   Search Results
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Search Results</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card card-trans-6">
    <div class="card-header"><b><?php echo e($searchResults->count()); ?> results found for "<?php echo e(request('query')); ?>"</b></div>

    <div class="card-body card-trans-4">

        <?php $__currentLoopData = $searchResults->groupByType(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $modelSearchResults): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3><?php echo e(ucfirst($type)); ?></h3>

            <?php $__currentLoopData = $modelSearchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchResult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="m-0">
                    <li class=""><a href="<?php echo e($searchResult->url); ?>"><?php echo e(ucwords($searchResult->title)); ?></a></li>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/search/results.blade.php ENDPATH**/ ?>