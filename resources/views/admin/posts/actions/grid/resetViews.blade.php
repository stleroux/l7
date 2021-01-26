@can('post-manage')
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="{{ $post->id }}"
      data-url="{{ url('admin/posts/resetViews', $post) }}"
      title="Reset Post Views"
      >
      <i class="{{ config('icons.resetViews') }} text-secondary"></i>
      {{-- Reset Views --}}
   </button>
@endcan
