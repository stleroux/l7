
<div class="row">
	<div class="col-sm-4">
		<?php if($invoice->status == "estimate"): ?>
			<h1 class="text-center">ESTIMATE</h1>
		<?php else: ?>
			<h1 class="text-center">INVOICE</h1>
		<?php endif; ?>
	</div>
	<div class="col-sm-8">
		<div class="col-sm-12">
			<h3 class="text-center">
				<?php echo e(config('invoicer.companyName')); ?>

			</h3>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php echo e(config('invoicer.address_1') . ', '); ?>

				<?php echo e((Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : ''); ?>

				<?php echo e((Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : ''); ?>

				<?php echo e((Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : ''); ?>

				<?php echo e((Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : ''); ?>

				<br />
				<?php if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax'))): ?>
					<i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?> &nbsp;
					<i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

				<?php elseif(Config::get('invoicer.telephone')): ?>
					<i class='fas fa-phone'></i> <?php echo e(config('invoicer.telephone')); ?>

				<?php elseif(Config::get('invoicer.fax')): ?>
					<i class="fas fa-fax"></i> <?php echo e(config('invoicer.fax')); ?>

				<?php endif; ?>

				<br />
				<?php if(Config::get('invoicer.email') && (Config::get('invoicer.website'))): ?>
					<i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?>

					&nbsp;
					<a href="http://thewoodbarn.ca" target="_blank">
						<i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

					</a>
				<?php elseif(Config::get('invoicer.email')): ?>
					<i class="fas fa-at"></i> <?php echo e(config('invoicer.email')); ?>

				<?php elseif(Config::get('invoicer.website')): ?>
					<a href="http://thewoodbarn.ca" target="_blank">
						<i class="fas fa-newspaper"></i> <?php echo e(config('invoicer.website')); ?>

					</a>
				<?php endif; ?>

				<br />
				<?php if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo'))): ?>
					WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?> &nbsp;
					HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

				<?php elseif(Config::get('invoicer.wsibNo')): ?>
					WSIB N<sup>o</sup>: <?php echo e(config('invoicer.wsibNo')); ?>

				<?php elseif(Config::get('invoicer.hstNo')): ?>
					HST N<sup>o</sup>: <?php echo e(config('invoicer.hstNo')); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/show/inc/header.blade.php ENDPATH**/ ?>