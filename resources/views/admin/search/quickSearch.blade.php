{{-- Quick search box in NavBar  --}}

<form action="{{ route('admin.quickSearch') }}" method="POST" class="form-inline ml-3">
   @csrf

   <div class="input-group input-group-sm border">
      <input type="text" name="query" class="form-control form-control-navbar" placeholder="Quick Search" aria-label="Search">
      <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
         </button>
      </div>
   </div>
</form>
