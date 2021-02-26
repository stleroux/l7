@if(checkPerm('project_browse'))
   <a href="{{ route('admin.projects.index') }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-{{ Route::is('admin.projects.index') ? 'secondary' : 'primary' }} text-light"
      title="Projects">
      <i class="{{ config('icons.projects') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
