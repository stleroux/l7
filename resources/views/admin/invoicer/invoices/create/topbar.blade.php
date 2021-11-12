<div class="row mb-2">
{{-- 
   <div class="col">
   </div> --}}

   <div class="col">

      <div class="float-right">

{{--          @if(request()->has('type') && (request()->type == "quote"))
            <a href="{{ route('admin.invoicer.invoices', 'quotes') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Create Quote
            </button>
         @endif --}}

         {{-- @if(request()->has('type') && (request()->type == "estimate")) --}}
            <a href="{{ route('admin.invoicer.invoices', ['type'=>'estimates']) }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
            <button type="submit" name="save" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Create Estimate
            </button>
         {{-- @endif --}}






         {{-- <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-outline-secondary">
            <i class="{{ config('icons.invoicer-invoices') }}"></i>
            Back to Invoices
         </a> --}}

{{-- 	      <a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
            <i class="{{ config('icons.invoicer-clients') }}"></i>
            Back to Clients
         </a> --}}

{{--          <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="{{ Config('icons.add') }}"></i>
            Create Client
         </button> --}}

         {{-- @if(request()->has('type'))
            <a href="{{ route('admin.invoicer.estimates') }}" class="btn btn-sm btn-warning">
         @else
            <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-warning">
         @endif
               <i class="{{ config('icons.cancel') }}"></i>
                  Cancel
            </a> --}}



      </div>

   </div>

</div>
