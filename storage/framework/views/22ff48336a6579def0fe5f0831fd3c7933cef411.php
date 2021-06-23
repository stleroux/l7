<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['invoicer-dashboard','invoicer-ledger','invoicer-invoice','invoicer-client','invoicer-product'])): ?>
	
	<li class="nav-item has-treeview <?php echo e((Request::is('admin/invoicer*')) ? 'menu-open' : ''); ?>">
		
		<a href="#" class="nav-link <?php echo e((Request::is('admin/invoicer*')) ? 'active' : ''); ?>">
			<i class="<?php echo e(config('icons.invoicer')); ?>"></i>
			<p>
				Invoicer
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">
		
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-dashboard')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.invoicer-dashboard')); ?>"></i>
						<p>Dashboard</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-ledger')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer.ledger')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer/ledger*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.invoicer-ledger')); ?>"></i>
						<p>Ledger</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer.invoices.estimates')); ?>"
						class="nav-link
						<?php echo e(Request::is('admin/invoicer/invoices/estimates') ? 'active' : ''); ?>

						<?php echo e((Request::is('admin/invoicer/invoices/create') &&  Request::exists('type')) ? 'active' : ''); ?>

						<?php echo e((Request::is('admin/invoicer/invoices/*/edit') &&  Request::exists('type')) ? 'active' : ''); ?>

					">
						
						<i class="<?php echo e(config('icons.invoicer-invoices')); ?>"></i>
						<p>Estimates</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer.invoices')); ?>"
						class="nav-link
							<?php echo e(Request::is('admin/invoicer/invoices') ? 'active' : ''); ?>

							<?php echo e(Request::is('admin/invoicer/invoices/logged') ? 'active' : ''); ?>

							<?php echo e(Request::is('admin/invoicer/invoices/invoiced') ? 'active' : ''); ?>

							<?php echo e(Request::is('admin/invoicer/invoices/paid') ? 'active' : ''); ?>

							<?php echo e(Request::is('admin/invoicer/invoices/unpaid') ? 'active' : ''); ?>

							<?php echo e((Request::is('admin/invoicer/invoices/*/edit') && !Request::exists('type')) ? 'active' : ''); ?>

							<?php echo e((Request::is('admin/invoicer/invoices/create') && !Request::exists('type')) ? 'active' : ''); ?>

						">
						<i class="<?php echo e(config('icons.invoicer-invoices')); ?>"></i>
						<p>Invoices</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer.clients')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer/clients*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
						<p>Clients</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-product')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.invoicer.products')); ?>" class="nav-link <?php echo e(Request::is('admin/invoicer/products*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.invoicer-products')); ?>"></i>
						<p>Products</p>
					</a>
				</li>
			<?php endif; ?>

		</ul>
	
	</li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/invoicer.blade.php ENDPATH**/ ?>