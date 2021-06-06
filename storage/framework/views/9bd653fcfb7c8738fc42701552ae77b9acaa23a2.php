

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.darts')); ?>"></i>            
   Leaderboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   
   <li class="breadcrumb-item">Darts</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.darts.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.darts.blocks.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="row">
      <div class="col">
         
         <div class="card mb-2 card-trans-2">

            <div class="card-header p-2 text-light">
               <div class="row">
                  <div class="col font-weight-bold">
                     <i class="<?php echo e(config('icons.darts')); ?>"></i>            
                     Dart Keeper
                  </div>
                  <div class="col text-right">
                     Statistics module not completed
                  </div>
               </div>         
            </div>

            <div class="card-body p-2">
               <div class="form-row">
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.zeroOneTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.zeroOneIndividuals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.cricketTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.cricketIndividuals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.aroundTheWorldTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.aroundTheWorldIndividuals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.baseballTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.baseballIndividuals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.castleTeams', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="col">
                     <?php echo $__env->make('UI.darts.statistics.castleIndividuals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
               </div>

            </div>

            <div class="card-footer card_footer p-1 text-light">
               <div class="row">
                  <div class="col-6">
                     Statistics do not include games listed as Practice in the Games Board
                  </div>
                  <div class="col-6">
                     Statistics only account for Completed games
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/index.blade.php ENDPATH**/ ?>