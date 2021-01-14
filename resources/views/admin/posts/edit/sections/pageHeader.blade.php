@section('pageHeader')
   <i class="{{ config('icons.posts') }}"></i>
   Edit Post :: {{ ucwords($post->title) }}
@endsection