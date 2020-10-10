<div class="dropdown text-center">
   <a class="dropdown-button"
      id="dropdown-menu-{{ $movie->id }}"
      data-toggle="dropdown"
      data-boundary="viewport"
      aria-haspopup="true"
      aria-expanded="false">
      <i class="{{ Config::get('icons.ellipsis') }}"></i>
   </a>
   <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu-{{ $movie->id }}">
      @if($movie->deleted_at)
         {{-- @can('movie-edit') --}}
         @if($movie->user_id == Auth::id() || Auth::user()->can('movie-edit'))
{{--             <a href="{{ route('admin.movies.restore', $movie) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a> --}}
         {{-- @endcan --}}

         <button type="button"
            class="dropdown-item restore-model bg-light"
            data-toggle="modal"
            data-target="#restoreModal"
            data-id="{{ $movie->id }}"
            data-url="{{ url('admin/movies/restore', $movie) }}"
            >
            <i class="{{ Config::get('icons.restore') }} text-primary"></i>
            Restore
         </button>
         @endif

         {{-- @can('movie-delete') --}}
         @if($movie->user_id == Auth::id() || Auth::user()->can('movie-delete'))
{{--             <button type="button"
               class="dropdown-item restore-model bg-light"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $movie->id }}"
               data-url="{{ url('admin/movies/restore') }}"
               >
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </button> --}}

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $movie->id }}"
               data-url="{{ url('admin/movies/delete', $movie) }}"
               >
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>

         @endif
         {{-- @endcan --}}
      @endif

{{--       @if($movie->deleted_at)
         @can('movie-edit')
            <h4 class="dropdown-header">Admin Functions</h4>

            <a href="{{ route('admin.movies.restore', $movie) }}" class="dropdown-item bg-light">
               <i class="{{ Config::get('icons.restore') }} text-primary"></i>
               Restore
            </a>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="dropdown-item delete-model bg-light"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $movie->id }}"
               data-url="{{ url('admin/movies/delete', $movie) }}"
               >
               <i class="{{ Config::get('icons.delete') }} text-danger"></i>
               Delete Permanently
            </button>
         @endcan
      @endif --}}

   </div>
</div>
