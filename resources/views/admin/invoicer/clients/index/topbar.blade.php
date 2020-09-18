<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         @can('user-create')
   	      <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary">
   				<i class="{{ Config::get('icons.user') }}"></i>
   				Add New Client
   			</a>
         @endcan
      </div>

   </div>

</div>