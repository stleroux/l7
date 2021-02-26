@if(!$post->deleted_at)

   @if($post->user_id == Auth::id() || Auth::user()->can('post-edit'))
      @include('admin.actions.grid.edit', ['modelName'=>'post', 'model'=>$post])

      @if(!$post->published_at)
         @include('admin.actions.grid.publish', ['modelName'=>'post', 'model'=>$post])
      @else
         @include('admin.actions.grid.unpublish', ['modelName'=>'post', 'model'=>$post])
      @endif
      @include('admin.actions.grid.resetViews', ['modelName'=>'post', 'model'=>$post])

   @endif

@endif

@if($post->user_id == Auth::id() || Auth::user()->can('post-delete'))
   @include('admin.actions.grid.destroy', ['modelName'=>'post', 'model'=>$post])
@endif


@if($post->deleted_at)
   @can('post-edit')
      @include('admin.actions.grid.restore', ['modelName'=>'post', 'model'=>$post])
      @include('admin.actions.grid.delete', ['modelName'=>'post', 'model'=>$post])
   @endcan
@endif
