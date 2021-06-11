
   <div class="col-md-3">
      <div class="card card-trans-6 mb-2">
         <div class="card-header card_header p-2">Author</div>
         <div class="card-body card_body p-1 text-center">
            <?php echo $__env->make('common.authorFormat', ['model'=>$recipe, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
   </div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/author.blade.php ENDPATH**/ ?>