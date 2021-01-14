{{-- @if(checkPerm('post_edit', $post)) --}}
   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info text-light"
      type="submit"
      title="Update Post">
      <i class="{{ config('buttons.update') }}"></i>
      {{ $btn_label ?? '' }}
   </button>
{{-- @endif --}}
