<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/resetViews';
   } else {
      $routeName = 'admin/'.$modelName.'s/resetViews';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="<?php echo e($model->id); ?>"
      data-url="<?php echo e(url($routeName, $model)); ?>"
      title="Reset <?php echo e(ucfirst($modelName)); ?> Views"
      >
      <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/resetViews.blade.php ENDPATH**/ ?>