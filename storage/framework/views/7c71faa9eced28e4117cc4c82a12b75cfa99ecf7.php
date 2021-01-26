
   <div class="col-md-3">
      <div class="card card-secondary mb-2">
         <div class="card-header p-1">Author</div>
         <div class="card-body p-1 text-center">
            <?php echo $__env->make('common.authorFormat', ['model'=>$recipe, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
   </div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/author.blade.php ENDPATH**/ ?>