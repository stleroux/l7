@canany(['invoicer-dashboard','invoicer-ledger','invoicer-invoice','invoicer-client','invoicer-product'])
	
	<li class="nav-item has-treeview {{ (Request::is('admin/invoicer*')) ? 'menu-open' : '' }}">
		
		<a href="#" class="nav-link {{ (Request::is('admin/invoicer*')) ? 'active' : '' }}">
			<i class="{{ config('icons.invoicer') }}"></i>
			<p>
				Invoicer
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">
		
			@can('invoicer-dashboard')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer') }}" class="nav-link {{ Request::is('admin/invoicer') ? 'active' : '' }}">
						<i class="{{ config('icons.invoicer-dashboard') }}"></i>
						<p>Dashboard</p>
					</a>
				</li>
			@endcan

			@can('invoicer-ledger')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer.ledger') }}" class="nav-link {{ Request::is('admin/invoicer/ledger*') ? 'active' : '' }}">
						<i class="{{ config('icons.invoicer-ledger') }}"></i>
						<p>Ledger</p>
					</a>
				</li>
			@endcan

			@can('invoicer-invoice')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer.invoices.estimates') }}"
						class="nav-link
						{{ Request::is('admin/invoicer/invoices/estimates') ? 'active' : '' }}
						{{ (Request::is('admin/invoicer/invoices/create') &&  Request::exists('type')) ? 'active' : '' }}
						{{ (Request::is('admin/invoicer/invoices/*/edit') &&  Request::exists('type')) ? 'active' : '' }}
					">
						{{-- {{ Request::exists('type') }} --}}
						<i class="{{ config('icons.invoicer-invoices') }}"></i>
						<p>Estimates</p>
					</a>
				</li>
			@endcan

			@can('invoicer-invoice')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer.invoices') }}"
						class="nav-link
							{{ Request::is('admin/invoicer/invoices') ? 'active' : '' }}
							{{ Request::is('admin/invoicer/invoices/logged') ? 'active' : '' }}
							{{ Request::is('admin/invoicer/invoices/invoiced') ? 'active' : '' }}
							{{ Request::is('admin/invoicer/invoices/paid') ? 'active' : '' }}
							{{ Request::is('admin/invoicer/invoices/unpaid') ? 'active' : '' }}
							{{ (Request::is('admin/invoicer/invoices/*/edit') && !Request::exists('type')) ? 'active' : '' }}
							{{ (Request::is('admin/invoicer/invoices/create') && !Request::exists('type')) ? 'active' : '' }}
						">
						<i class="{{ config('icons.invoicer-invoices') }}"></i>
						<p>Invoices</p>
					</a>
				</li>
			@endcan

{{-- 			@can('invoicer-client')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer.clients') }}" class="nav-link {{ Request::is('admin/invoicer/clients*') ? 'active' : '' }}">
						<i class="{{ config('icons.invoicer-clients') }}"></i>
						<p>Clients</p>
					</a>
				</li>
			@endcan --}}

			@can('invoicer-product')
				<li class="nav-item ml-3">
					<a href="{{ route('admin.invoicer.products') }}" class="nav-link {{ Request::is('admin/invoicer/products*') ? 'active' : '' }}">
						<i class="{{ config('icons.invoicer-products') }}"></i>
						<p>Products</p>
					</a>
				</li>
			@endcan

		</ul>
	
	</li>

@endcan
