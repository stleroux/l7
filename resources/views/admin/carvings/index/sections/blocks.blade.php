@section('blocks')

   @include('admin.carvings.index.blocks.actions')
   
   @if(Route::currentRouteName() == 'admin.carvings.index')
   	@include('admin.carvings.blocks.tags')
   @endif
   
   @include('admin.carvings.index.blocks.pages')
   @include('admin.carvings.index.blocks.tools')

@endsection
