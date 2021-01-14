@section('pageHeader')
   <i class="{{ config('icons.posts') }}"></i>
   @if(Route::currentRouteName('') == 'admin.posts.trashed')
      Trashed Posts
   @elseif(Route::currentRouteName('') == 'admin.posts.future')
   	Future Posts
   @elseif(Route::currentRouteName('') == 'admin.posts.new')
   	New Posts
   @elseif(Route::currentRouteName('') == 'admin.posts.unpublished')
   	Unpublished Posts
   @elseif(Route::currentRouteName('') == 'admin.posts.published')
   	Published Posts
   @else
      Posts
   @endif
@endsection