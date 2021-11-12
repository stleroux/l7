<footer class="container-fluid w-100 bg-dark text-light py-2">
	<div id="footer">
		<div class="text-center">
			<div class="col-12">
				Copyright &copy; <?php echo e(now()->year); ?> <strong><a href="http://www.thewoodbarn.ca" class="text-light">TheWoodBarn.ca</a>&nbsp;</strong> All rights reserved.
			</div>
			<div class="col-12">
				<div class="small">
					<a href="<?php echo e(route('terms')); ?>" class="text-light">Terms &amp; Conditions</a> | <a href="<?php echo e(route('privacy')); ?>" class="text-light">Privacy Policy</a>
				</div>
			</div>
			<div class="col-12">
				Version <?php echo e(config('settings.siteVersionNo')); ?>

			</div>
		</div>
	</div>
</footer>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/common/footer.blade.php ENDPATH**/ ?>