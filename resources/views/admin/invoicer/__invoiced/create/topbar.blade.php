<div class="row mb-2">
{{-- 
   <div class="col">
   </div> --}}

   <div class="col">

      <div class="float-right">

{{-- 	      <a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
            <i class="{{ config('icons.invoicer-clients') }}"></i>
            Back to Clients
         </a> --}}

         {{-- <a href="{{ route('admin.invoicer.invoiced') }}" class="btn btn-sm btn-outline-secondary">
            <i class="{{ config('icons.invoicer-invoices') }}"></i>
            Back to Invoices
         </a> --}}

         <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="{{ Config('icons.add') }}"></i>
            Create Client
         </button>

         <a href="{{ route('admin.invoicer.invoiced') }}" class="btn btn-sm btn-warning">
            <i class="{{ config('icons.cancel') }}"></i>
            Cancel
         </a>

         <button type="submit" name="save" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.save') }}"></i>
            Create Invoice
         </button>


         {{-- 
         @if(request()->has('type'))
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Create Estimate
            </button>
         @else
         @endif --}}
      </div>

   </div>

</div>
