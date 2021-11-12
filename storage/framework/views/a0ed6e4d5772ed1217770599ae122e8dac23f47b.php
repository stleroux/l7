
<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
         <div class="card-title">
            Likes            
         </div>
      </div>

		<div class="card-body card_body p-1 text-center text-dark">

         <?php echo e($recipe->likes()->count()); ?>


      </div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/likes.blade.php ENDPATH**/ ?>