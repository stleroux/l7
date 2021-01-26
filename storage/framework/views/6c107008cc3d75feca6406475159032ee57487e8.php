<?php if(auth()->guard()->check()): ?>
	<?php if(
		\Config::get('settings.carvings') == 'visible' ||
		\Config::get('settings.blog') == 'visible' ||
		\Config::get('settings.projects') == 'visible' ||
		\Config::get('settings.recipes') == 'visible'
		): ?>
	<form  action="<?php echo e(route('UI.search')); ?>" method="POST" class="form-inline ml-3">
		<?php echo csrf_field(); ?>

		<div class="input-group input-group-sm">
		
			<input type="text" name="query" class="form-control form-control-navbar"  placeholder="Site Search" aria-label="Search">
			
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</div>

		</div>

	</form>

	<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/navbar/search.blade.php ENDPATH**/ ?>