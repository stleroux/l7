@can('project-manage')
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="{{ $project->id }}"
      data-url="{{ url('admin/projects/resetViews', $project) }}"
      title="Reset Project Views"
      >
      <i class="{{ config('icons.resetViews') }} text-secondary"></i>
      {{-- Reset Views --}}
   </button>
@endcan
