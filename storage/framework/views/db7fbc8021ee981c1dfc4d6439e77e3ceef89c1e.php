<?php if(isset($gameDone)): ?>
   <?php if(!$gameDone): ?>
      <?php echo $__env->make('UI.darts.01.inc.possibleOuts', ['score'=>$remainingScore, 'user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
<?php endif; ?>

<?php if(isset($teamGameDone)): ?>
   <?php if(!$teamGameDone): ?>
      <?php echo $__env->make('UI.darts.01.inc.possibleOuts', ['score'=>$remainingScore, 'user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/blocks/possibleOuts.blade.php ENDPATH**/ ?>