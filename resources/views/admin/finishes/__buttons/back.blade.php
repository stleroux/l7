<a href="{{ route('admin.projects.finishes.index') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
   title="Finishes">
   <i class="{{ config('icons.back') }}"></i>
   {{ $btn_label ?? '' }}
</a>
