{{-- @if(checkPerm('movie_edit')) --}}
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      type="submit"
      formaction="{{-- {{ route('admin.movies.unpublishAll') }} --}}"
      formmethod="POST"
      id="bulk-publish"
      style="display:none;"
      title="Unpublish Selected"
      onclick="return confirm('Are you sure you want to unpublish these movies?')">
      <i class="{{ config('buttons.unpublish') }} text-danger"></i>
      Unpublish All
   </button>
{{-- @endif --}}
