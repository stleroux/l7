<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">

            <a href="{{ route('admin.invoicer.clients.edit', $client->id) }}" class="btn btn-sm btn-secondary">
               <i class="far fa-edit"></i>
               Edit Client
            </a>

            <a href="{{ route('admin.invoicer.invoices.create', $client->id) }}" class="btn btn-sm btn-secondary">
               <i class="far fa-plus-square"></i>
               Add New Invoice
            </a>

	      <a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-primary">
				<i class="{{ config('icons.invoicer-clients') }}"></i>
				Clients List
			</a>
      </div>

   </div>

</div>