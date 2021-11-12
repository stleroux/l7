



<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
   <style>
      .hover { background-color: grey; }
      .thead tr th { color: yellow; }

      /*tr.rowcolSelected{ background-color: #222222; }*/
      td.rowcolSelected:hover{
         background-color: red;
         color: black;
         font-weight: bold;
      }
   </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   
   Game Scoreboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('darts.index')); ?>">Darts</a></li>
   <li class="breadcrumb-item">01</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <p>&nbsp;</p>
   <?php echo $__env->make('UI.darts.blocks.possibleOuts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.players.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('UI.darts.01.players.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php if(!$gameDone): ?>
      <?php echo $__env->make('UI.darts.01.inc.scoreboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
   
   
   <div class="form-row">
      <div class="col-sm-4">
         <?php echo $__env->make('UI.darts.01.players.scorePanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <?php if(isset($gameDone)): ?>
         <?php if(!$gameDone): ?>
            <div class="col-sm-4">
               <?php echo $__env->make('UI.darts.01.inc.dartboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-sm-4">
               <?php echo $__env->make('UI.darts.01.players.playerStats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('UI.darts.01.players.gameInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         <?php else: ?>
            <div class="col-sm-4">
               <?php echo $__env->make('UI.darts.01.players.gameInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-sm-4">
               <?php echo $__env->make('UI.darts.01.players.playerStats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         <?php endif; ?>
      <?php endif; ?>
   </div>

   <div class="form-row">
      <div class="col-sm-12">
         <div class="card-group">
            <div class="card mb-2 card-trans-4">
               <div class="card-header p-2 text-light">Scoresheets</div>
               <div class="card-body p-2">
                  <div class="form-row">
                     <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('UI.darts.01.players.scoresheet', [$player], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script>
      $("#tbl").delegate('td','mouseover mouseleave', function(e) {
         if (e.type == 'mouseover') {
            $(this).parent().addClass("hover");
            $("colgroup").eq($(this).index()).addClass("hover");
         } else {
            $(this).parent().removeClass("hover");
            $("colgroup").eq($(this).index()).removeClass("hover");
         }
      });
   </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(''.($gameDone == 0) ? 'layouts.UI.app-10-2' : 'layouts.UI.app-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/01/players/index.blade.php ENDPATH**/ ?>