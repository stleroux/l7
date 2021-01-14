@if(checkPerm('project_edit', $material))
   <a href="{{ route('admin.projects.materials.edit', $material->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      title="Edit Material">
      <i class="{{ config('icons.edit') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
