@can('carving-edit')
   <a href="{{ route('admin.carvings.edit', $carving) }}" class="btn btn-sm btn-default" title="Edit carving">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      {{-- Edit --}}
   </a>
@endcan
