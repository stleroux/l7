<div class="col text-center">
   <div class="row">
      <div class="w-50 font-weight-bold">Category</div>   
      <div class="w-50 font-weight-bold">Views</div>
   </div>
</div>

<div class="col text-center">
   <div class="row border-bottom border-dark">
      <div class="w-50 border-right border-dark"><?php echo e($carving->category); ?></div>
      <div class="w-50"><?php echo e(views($carving)->count()); ?></div>
   </div>
</div>

<div class="col text-center">
   <div class="row">
      <div class="w-50 font-weight-bold">Comments</div>
      <div class="w-50 font-weight-bold">Images</div>
   </div>
</div>

<div class="col text-center">
   <div class="row border-bottom border-dark">
      <div class="w-50 border-right border-dark"><?php echo e(count($carving->images)); ?></div>
      <div class="w-50"><?php echo e($carving->comments->count()); ?></div>
   </div>
</div>

<div class="col text-center">
   <div class="row">
       <div class="w-50 font-weight-bold">Likes</div>
       <div class="w-50 font-weight-bold">
         
      </div>
   </div>
</div>

<div class="col text-center">
   <div class="row ">
      <div class="w-50 border-right border-bottom border-dark"><?php echo e($carving->likes()->count()); ?></div>
      <div class="w-50">
         
      </div>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/partials/index/rows.blade.php ENDPATH**/ ?>