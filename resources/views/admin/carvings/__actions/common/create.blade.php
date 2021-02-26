@can('carving-create')
   <a href="{{ route('admin.carvings.create') }}" class="btn btn-block btn-outline-success" title="Create Carving">
      <i class="{{ config('icons.add') }}"></i>
      <div class="d-none d-lg-inline">
         Create Carving
      </div>
   </a>
@endcan
