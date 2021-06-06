<?php if(auth()->guard()->check()): ?>

	<div class="card mb-2 card-trans-4">

		<div class="card-header bg-steel p-2">
			<i class="<?php echo e(config('buttons.archives')); ?>"></i>
			Blog Archives
		</div>
		
		<div class="card-body p-2">
			<?php if(count($postlinks) > 0): ?>
				<ul class="list-group px-0 py-0">
					<?php $__currentLoopData = $postlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('blog.archive', ['year'=>$plink->year, 'month'=>$plink->month])); ?>"
							style="text-decoration: none"
							class="list-group-item list-group-item-action p-1 card-trans-4"
						>
							<i class="<?php echo e(config('buttons.archive')); ?>"></i>
							<?php echo e($plink->month_name); ?> - <?php echo e($plink->year); ?>

							<span class="badge badge-secondary badge-pill float-right"><?php echo e($plink->post_count); ?></span>
						</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			<?php else: ?>
				<?php echo e(config('settings.noRecordsFound')); ?>

			<?php endif; ?>
		</div>

	</div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/blog/blocks/archives.blade.php ENDPATH**/ ?>