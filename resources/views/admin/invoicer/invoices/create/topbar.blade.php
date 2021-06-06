<div class="row mb-2">
{{-- 
   <div class="col">
   </div> --}}

   <div class="col">

      <div class="float-right">

	      <a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
            {{-- <i class="fas fa-backward"></i> --}}
            <i class="{{ config('icons.invoicer-clients') }}"></i>
            Back to Clients
         </a>

         <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-outline-secondary">
            {{-- <i class="fas fa-backward"></i> --}}
            <i class="{{ config('icons.invoicer-invoices') }}"></i>
            Back to Invoices
         </a>

         <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="{{ Config('icons.add') }}"></i>
            Create Client
         </button>

         @if(request()->has('type'))
            <a href="{{ route('admin.invoicer.invoices.estimates') }}" class="btn btn-sm btn-warning">
         @else
            <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-warning">
         @endif
               <i class="{{ config('icons.cancel') }}"></i>
                  Cancel
            </a>

         @if(request()->has('type'))
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Create Estimate
            </button>
         @else
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Create Invoice
            </button>
         @endif
      </div>

   </div>

</div>
