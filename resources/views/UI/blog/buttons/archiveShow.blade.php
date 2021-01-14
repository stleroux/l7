<a href="{{ route('blog.show', $archive->slug) }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
   title="View Blog">
   <i class="{{ config('icons.show') }}"></i>
   {{ $btn_label ?? 'Show' }}
</a>
