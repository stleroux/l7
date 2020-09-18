<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
	      <a href="{{ route('admin.invoicer.products') }}" class="btn btn-sm btn-outline-secondary">
            <i class="fa fa-backward"></i>
            Cancel
         </a>

         <button type="submit" class="btn btn-sm btn-primary">
            <i class="{{ Config::get('icons.update') }}"></i>
            Update Product
         </button>
      </div>

   </div>

</div>