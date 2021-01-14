<a href="{{ route('admin.projects.materials.index') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
   title="Materials">
   <i class="{{ config('icons.back') }}"></i>
   {{ $btn_label ?? '' }}
</a>
