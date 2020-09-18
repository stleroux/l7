<a href="{{ route('blog.show', $archive->slug) }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
   title="View Blog">
   <i class="{{ Config::get('icons.show') }}"></i>
   {{ $btn_label ?? 'Show' }}
</a>
