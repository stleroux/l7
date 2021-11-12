<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/resetViews';
   } else {
      $routeName = 'admin/'.$modelName.'s/resetViews';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   <span data-toggle="modal" data-target="#resetViewsModal">
      <button type="button"
         class="resetViews-model btn btn-sm btn-default"
         
         
         data-toggle="tooltip"
         data-id="<?php echo e($model->id); ?>"
         data-url="<?php echo e(url($routeName, $model)); ?>"
         title="Reset <?php echo e(ucfirst($modelName)); ?> Views"
         >
         <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
         
      </button>
   </span>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/resetViews.blade.php ENDPATH**/ ?>