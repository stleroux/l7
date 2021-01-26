@can('bug-create')
   <a href="{{ route('admin.bugs.create') }}" class="btn btn-sm btn-block btn-outline-success mt-2" target="_blank" title="Create Bug">
      <i class="{{ config('icons.add') }}"></i>
      Report a Bug
   </a>
@endcan

@can('feature-create')
   <a href="{{ route('admin.features.create') }}" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Request Feature">
      <i class="{{ config('icons.add') }}"></i>
      Request a Feature
   </a>
@endcan

@can('post-create')
   <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Post">
      <i class="{{ config('icons.add') }}"></i>
      Create Post
   </a>
@endcan

@can('tag-create')
   <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Tag">
      <i class="{{ config('icons.add') }}"></i>
      Create Tag
   </a>
@endcan

@can('carving-create')
   <a href="{{ route('admin.carvings.create') }}" class="btn btn-sm btn-block btn-outline-success" target="_blank" title="Create Tag">
      <i class="{{ config('icons.add') }}"></i>
      Create Carving
   </a>
@endcan
