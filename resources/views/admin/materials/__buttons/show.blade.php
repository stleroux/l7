@if(checkPerm('project_read'))
   <a href="{{ route('admin.projects.materials.show', $material->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Show Material">
      <i class="{{ config('icons.show') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
