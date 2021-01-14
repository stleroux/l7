<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         {{-- @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'admin.invoicer.clients') --}}
   	      <a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
               <i class="fas fa-backward"></i>
               Back to Clients
            </a>
         {{-- @endif --}}

         {{-- @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'admin.invoicer.invoices') --}}
            <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-outline-secondary">
               <i class="fas fa-backward"></i>
               Back to Invoices
            </a>
         {{-- @endif --}}

         <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="{{ Config('icons.add') }}"></i>
            Create Client
         </button>

         {{-- <a href="{{ route('admin.invoicer.clients.create') }}" class="btn btn-sm btn-outline-primary" target="_blank">
            <i class="{{ Config('icons.add') }}"></i>
            Create Client
         </a> --}}

         <button type="submit" name="save" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.save') }}"></i>
            Create Invoice
         </button>
      </div>

   </div>

</div>
