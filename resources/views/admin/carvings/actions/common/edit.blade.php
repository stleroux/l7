@can('carving-edit')
   <a href="{{ route('admin.carvings.edit', $carving) }}" class="btn btn-block btn-outline-primary">
      <i class="{{ config('icons.edit') }}"></i>
      Edit
   </a>
@endcan
