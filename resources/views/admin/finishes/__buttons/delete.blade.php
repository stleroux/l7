@if(checkPerm('project_delete'))
   <a href="{{ route('admin.projects.finishes.delete', $finish->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-danger text-light"
      title="Delete Finish">
      <i class="{{ config('icons.delete') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
