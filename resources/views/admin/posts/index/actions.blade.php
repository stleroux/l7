@if(!$post->deleted_at)

   @if($post->user_id == Auth::id() || Auth::user()->can('post-edit'))
      @include('admin.posts.actions.grid.edit')

      @if(!$post->published_at)
         @include('admin.posts.actions.grid.publish')
      @else
         @include('admin.posts.actions.grid.unpublish')
      @endif
      @include('admin.posts.actions.grid.resetViews')         

   @endif

@endif

@if($post->user_id == Auth::id() || Auth::user()->can('post-delete'))
   @include('admin.posts.actions.grid.destroy')            
@endif


@if($post->deleted_at)
   @can('post-edit')
      @include('admin.posts.actions.grid.restore')
      @include('admin.posts.actions.grid.delete')
   @endcan
@endif
