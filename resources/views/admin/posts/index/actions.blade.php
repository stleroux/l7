
      @if(!$post->deleted_at)
         {{-- @can('recipe-edit') --}}
         @if($post->user_id == Auth::id() || Auth::user()->can('post-edit'))
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-default" title="Edit Post">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>

            @if(!$post->published_at)
               <button type="button"
                  class="publish-model btn btn-sm btn-default"
                  data-toggle="modal"
                  data-target="#publishModal"
                  data-id="{{ $post->id }}"
                  data-url="{{ url('admin/posts/publish', $post) }}"
                  title="Publish Post"
                  >
                  <i class="{{ config('icons.publish') }}"></i>
                  {{-- Unpublish --}}
               </button>
            @else
               <button type="button"
                  class="unpublish-model btn btn-sm btn-default"
                  data-toggle="modal"
                  data-target="#unpublishModal"
                  data-id="{{ $post->id }}"
                  data-url="{{ url('admin/posts/unpublish', $post) }}"
                  title="Unpublish Post"
                  >
                  <i class="{{ config('icons.publish') }} text-warning"></i>
                  {{-- Unpublish --}}
               </button>
            @endif

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

      @endif

         {{-- @can('recipe-delete') --}}
         @if($post->user_id == Auth::id() || Auth::user()->can('post-delete'))
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $post->id }}"
               data-url="{{ url('admin/posts', $post) }}"
               title="Trash Post"
               >
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endif
         {{-- @endcan --}}
      @endif

      @if($post->deleted_at)
         @can('recipe-edit')
            {{-- <a href="{{ route('admin.posts.restore', $post) }}" class="btn btn-sm btn-default">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               Restore
            </a> --}}
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $post->id }}"
               data-url="{{ url('admin/posts/restore', $post) }}"
               title="Restore Post"
               >
               <i class="{{ config('icons.restore') }}"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $post->id }}"
               data-url="{{ url('admin/posts/delete', $post) }}"
               title="Permanently Delete Post"
               >
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif
