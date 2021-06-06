<?php if(auth()->guard()->check()): ?>

   <div class="card mb-2 card-trans-4" style="background-color: #800000">

      <div class="card-header text-light p-2">
         <i class="far fa-file-archive"></i>
         Archives
      </div>

   	<?php if(count($recipelinks) > 0): ?>
         <div class="card-body card-trans-6 p-0 m-0">

            <ul class="list-group">

   				<?php $__currentLoopData = $recipelinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rlink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   					<a href="<?php echo e(route('recipes.archives', ['year'=>$rlink->year, 'month'=>$rlink->month])); ?>"
   						class="card-trans-2 list-group-item list-group-item-action py-1 px-1 <?php echo e(Request::is('recipes/archives/' . $rlink->year . '/' . $rlink->month) ? 'active' : ''); ?>">
                     <i class="fas fa-archive fa-fw"></i>
   						<?php echo e($rlink->month_name); ?> - <?php echo e($rlink->year); ?>

   						<span class="float-right badge badge-pill badge-maroon"><?php echo e($rlink->recipe_count); ?></span>
   					</a>
   				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      		</ul>

   		<?php else: ?>
   			<div class="text text-center">No Data Available</div>
   		<?php endif; ?>

   	</div>

   </div>

<?php endif; ?><?php /**PATH C:\sites\l7\resources\views/UI/recipes/blocks/archives.blade.php ENDPATH**/ ?>