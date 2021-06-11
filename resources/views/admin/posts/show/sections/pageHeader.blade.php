@section('pageHeader')
   <i class="{{ config('icons.posts') }}"></i>
   @if(Route::currentRouteName('') == 'admin.posts.trashed')
      Trashed Posts
   @else
      View Post
   @endif
@endsection