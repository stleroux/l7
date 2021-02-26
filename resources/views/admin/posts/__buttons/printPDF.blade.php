{{-- @if(checkPerm('recipe_read')) --}}
   <a href="{{ route('admin.posts.printPDF', $post->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
      title="Print Post to PDF">
      <i class="{{ config('icons.pdf') }}"></i>
      <div class="d-none d-lg-inline">
      	{{ $btn_label ?? '' }}
      </div>
   </a>
{{-- @endif --}}
