@if(checkPerm('project_edit', $finish))
   <a href="{{ route('admin.projects.finishes.edit', $finish->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      title="Edit Finish">
      <i class="{{ config('icons.edit') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
