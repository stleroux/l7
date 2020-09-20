<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $post->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $post->id }}">
      @if(!$post->deleted_at)
         {{-- @can('recipe-edit') --}}
         @if($post->user_id == Auth::id() || Auth::user()->can('post-edit'))
            <a href="{{ route('admin.posts.edit', $post) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.edit') }} text-primary"></i>
               Edit
            </a>

{{--             <a href="{{ route('admin.posts.unpublish', $post) }}"
               class="dropdown-item bg-light"
               onclick="return confirm('Are you sure you want to unpublish this recipe?');"
            >
               <i class="{{ Config::get('icons.publish') }} text-pink"></i>
               Unpublish
            </a> --}}
         {{-- @endcan --}}


<button type="button"
   class="dropdown-item unpublish-model bg-light"
   data-toggle="modal"
   data-target="#unpublishModal"
   data-id="{{ $post->id }}"
   data-url="{{ url('admin/posts/unpublish', $post) }}"
   >
   <i class="{{ Config::get('icons.publish') }} text-warning"></i>
   Unpublish
</button>

<button type="button"
   class="dropdown-item resetViews-model bg-light"
   data-toggle="modal"
   data-target="#resetViewsModal"
   data-id="{{ $post->id }}"
   data-url="{{ url('admin/posts/resetViews', $post) }}"
   >
   <i class="{{ Config::get('icons.resetViews') }} text-secondary"></i>
   Reset Views
</button>






         @endif

         {{-- @can('recipe-delete') --}}
         @if($post->user_id == Auth::id() || Auth::user()->can('post-delete'))
            <button type="button"
               class="dropdown-item destroy-model bg-light"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $post->id }}"
               data-url="{{ url('admin/posts', $post) }}"
               >
               <i class="{{ Config::get('icons.trash') }} text-pink"></i>
               Trash
            </button>
         @endif
         {{-- @endcan --}}
      @endif

{{--       @if($post->deleted_at)
         @can('recipe-edit')
            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.posts.restore', $post) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $post->id }}"
               data-url="{{ url('admin/posts/delete', $post) }}"
               >
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif --}}

   </div>
</div>
