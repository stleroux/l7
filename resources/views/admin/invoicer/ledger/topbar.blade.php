<ul class="nav nav-tabs justify-content-start">
	<li class="nav-item">
		<a class="nav-link {{ (Request::is('admin/invoicer/ledger') ? 'active' : '') }}" href="{{ route('admin.invoicer.ledger') }}">
			<i class="fas fa-list"></i>
			All Invoices
			<span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::all()->count() }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{ (Request::is('admin/invoicer/ledger/logged') ? 'active' : '') }}" href="{{ route('admin.invoicer.ledger.logged') }}">
			<i class="fas fa-sign-out-alt"></i>
			Logged
			<span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'logged')->count() }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{ (Request::is('admin/invoicer/ledger/invoiced') ? 'active' : '') }}" href="{{ route('admin.invoicer.ledger.invoiced') }}">
			<i class="far fa-file-alt"></i>
			Invoiced
			<span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'invoiced')->count() }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{ (Request::is('admin/invoicer/ledger/paid') ? 'active' : '') }}" href="{{ route('admin.invoicer.ledger.paid') }}">
			<i class="far fa-money-bill-alt"></i>
			Paid
			<span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'paid')->count() }}</span>
		</a>
	</li>
   <li class="nav-item">
      <a class="nav-link {{ (Request::is('admin/invoicer/ledger/unpaid') ? 'active' : '') }}" href="{{ route('admin.invoicer.ledger.unpaid') }}">
         <i class="fas fa-ban"></i>
         Un-Paid
         <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', '!=', 'paid')->count() }}</span>
      </a>
   </li>
</ul>