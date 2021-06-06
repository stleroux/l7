

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   Create New Game - Step 1
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Create Game</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.darts.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <form action="<?php echo e(route('darts.games.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>

      <div class="card mb-2 card-trans-4">
         
         <div class="card-header card_header p-2">
            Select Game Type
         </div>
         
         <div class="card-body card_body pb-1">
            <div class="col-sm-3">
               <div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
                  <select name="type" class="form-control form-control-sm" placeholder="Pick One...">
                     <option value="301">301</option>
                     <option value="501">501</option>
                     <option value="701">701</option>
                     <option value="1001">1001</option>
                     <option value="around">Around the World</option>
                     <option value="baseball">Baseball</option>
                     <option value="castle">Castle</option>
                     <option value="cricket">Cricket</option>
                  </select>
                  <div class="pl-1 bg-danger"><?php echo e($errors->first('type')); ?></div>
               </div>
            </div>
         </div>
         
         <div class="card-footer p-1">
            
            <span class="float-right">
               <button type="submit" class="btn btn-sm btn-primary">Next Step</button>
            </span>
         </div>

      </div>

   </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/games/create.blade.php ENDPATH**/ ?>