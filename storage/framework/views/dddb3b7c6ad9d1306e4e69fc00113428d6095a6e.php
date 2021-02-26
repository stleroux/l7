





				


<small class="">
	<ul class="p-0 m-0">

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-notifications')): ?>
			<?php if(auth()->user()->unreadNotifications->count()): ?>
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-warning" href="<?php echo e(route('admin.notifications.unread')); ?>">
						<i class="<?php echo e(config('icons.bell')); ?> text-warning"></i>
						<?php echo e(auth()->user()->unreadNotifications->count()); ?>

					</a>
				</li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-manage')): ?>
			<?php if($newBugsCount): ?>
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-danger" href="<?php echo e(route('admin.bugs.new')); ?>">
						<i class="<?php echo e(config('icons.bugs')); ?> text-danger"></i>
						<?php echo e($newBugsCount); ?>

					</a>
				</li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-manage')): ?>
			<?php if($newFeaturesCount): ?>
				<li class="d-none d-sm-inline-block p-2">
					<a class="text-success" href="<?php echo e(route('admin.features.new')); ?>">
						<i class="<?php echo e(config('icons.features')); ?> text-success"></i>
						<?php echo e($newFeaturesCount); ?>

					</a>
				</li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
</small>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/admin/navbar/notifications.blade.php ENDPATH**/ ?>