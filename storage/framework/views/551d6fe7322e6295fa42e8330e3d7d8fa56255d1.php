

<input type="hidden" name="game_id" value="<?php echo e($game->id); ?>" / >



<input type="hidden" name="team_id" value="<?php echo e($tID); ?>" / >



<input type="hidden" name="game_type" value="<?php echo e($game->type); ?>" / >



<input type="hidden" name="remainingScore" value="<?php echo e(($game->type - zeroOneTeamScores($game, $tID)->sum('score'))); ?>" / >

<?php if(!$teamGameDone): ?>
   <div class="card mb-2 card-trans-4">
      <div class="card-header p-2 text-light">
         Enter Selected Player's Score
      </div>
      <div class="card-body p-2 card-trans-2">
         <div class="row justify-content-center">
            <div class="input-group col-sm-6">
               <input class="form-control form-control-lg" type="text" id="score" name="score" autocomplete="off" style="text-align: center" />
               <div class="input-group-append">
                  <button class="btn btn-success btn-lg" type="submit">Go!</button>
               </div>
            </div>
         </div>
      </div>

      <div class="card-footer p-1">
         <?php if($message = Session::get('dart-success')): ?>
            <div class="text-light" id="display-dart-success">
               <?php echo e(Session('dart-success')); ?>

            </div>
            <div class="p-0" id="display-dart-empty">
               Click Go! or Press Enter to submit
            </div>

         <?php elseif($message = Session::get('dart-error')): ?>
            <div class="text-light" id="display-dart-error">
               <?php echo e(Session('dart-error')); ?>

            </div>
            <div class="p-0" id="success-empty">
               Click Go! or Press Enter to submit
            </div>

         <?php elseif(count($errors) > 0): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="text-danger" id="display-dart-error">
                  <?php echo e($error); ?>

               </div>
               <div class="p-0" id="success-empty">
                  Click Go! or Press Enter to submit
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         <?php else: ?>
            <div class="p-0">
               Click Go! or Press Enter to submit
            </div>
         <?php endif; ?>
      </div>
   </div>
<?php endif; ?>

<?php $__env->startSection('scripts'); ?>

   
   <script type="text/javascript">
      $(document).ready(function(){
         $("#score").focus();
      });
   </script>

   <?php echo $__env->make('UI.darts.01.inc.messages.error.impossibility', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.invalid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.noScore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.problem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.error.tooHigh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('UI.darts.01.inc.messages.success.0-20', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.21-40', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.41-60', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.61-120', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.121-179', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.darts.01.inc.messages.success.180', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/UI/darts/01/teams/scorePad.blade.php ENDPATH**/ ?>