

<?php $__env->startSection('stylesheet'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <style>
    table { overflow: hidden; }
    td, th { border: 1px solid #999; padding: 1px; position: relative; }
    /*Row*/
    td:hover::before { background-color: rgba(245, 245, 245, 0.4); content: ''; height: 100%; left: -5000px; position: absolute; top: 0; width: 10000px; z-index: -2; }
    /*Column*/
    td:hover::after { background-color: rgba(245, 245, 245, 0.4); content: ''; height: 10000px; left: 0; position: absolute; top: -5000px; width: 100%; z-index: -1; }
    td.on { background-color: rgba(0, 255, 0, 0.5); }
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   AROUND the WORLD - 
   <?php if($players->count() > 1): ?> Multi <?php else: ?> Individual <?php endif; ?> 
   Player Game
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">Around the World</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.darts.around.players.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="card mb-2 card-trans-4">
      <div class="card-body p-2">
         <table class="table table-striped table-borderless">
            <thead>
               <tr class="card-trans-4 text-center">
                  <th>Name</th>
                  <?php $__currentLoopData = $pies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <th><?php echo e($pie); ?></th>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td class="card-trans-4">
                        <?php echo e($p->first_name); ?> <?php echo e($p->last_name); ?>

                     </td>
                     <?php $__currentLoopData = $pies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="item border text-center">
                          
                           
                        </td>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>

      <div class="card-footer p-1">
        At the moment, it is not possible to save the game in the system
        <span class="bg-danger float-right px-2">Make sure you delete the game from the main list when you are done.</span>
      </div>

   </div>

  <?php echo $__env->make('UI.darts.around.players.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
      <script>
      $( function() {
         $('td.item').click( function() {
            $(this).toggleClass('on');
         } )
      });
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/around/players/index.blade.php ENDPATH**/ ?>