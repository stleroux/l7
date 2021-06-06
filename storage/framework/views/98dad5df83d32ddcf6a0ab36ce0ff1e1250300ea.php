<div class="btn-group" style="background-color: #800000">
	<a class="btn btn-sm text-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
		Select A Category
		<span class="sr-only">Toggle Dropdown</span>
	</a>
	<div class="dropdown-menu dropdown-menu-right" style="background-color: #800000">
	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a class="dropdown-item p-0 pl-2 text-light" href="<?php echo e(route('recipes.indexList', $category->name)); ?>">
				<?php echo e(deliciousCamelcase(ucfirst($category->name))); ?>

			</a>
			<?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a class="dropdown-item card-trans-6 p-0 pl-2" href="<?php echo route('recipes.indexList', $children->name); ?>">
					&nbsp;&nbsp;&nbsp;- <?php echo e(deliciousCamelcase(ucfirst($children->name))); ?>

				</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/index/list/buttons/ddList.blade.php ENDPATH**/ ?>