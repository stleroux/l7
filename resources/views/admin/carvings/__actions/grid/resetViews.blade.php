@can('carving-manage')
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="{{ $carving->id }}"
      data-url="{{ url('admin/carvings/resetViews', $carving) }}"
      title="Reset Carving Views"
      >
      <i class="{{ config('icons.resetViews') }} text-secondary"></i>
      {{-- Reset Views --}}
   </button>
@endcan
