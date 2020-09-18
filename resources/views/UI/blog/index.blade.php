@extends ('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   Blog
@endsection

@section('right_column')
   @include('UI.blog.blocks.search')
   @include('UI.blog.blocks.popular')
   @include('UI.blog.blocks.archives')
@endsection

@section('topbar')
   @include('UI.blog.topbar')
@endsection

@section('content')

{{--    <div class="card mb-3">
      <div class="card-header section_header p-2">
         <i class="fas fa-blog"></i>
         Blog
      </div>

      <div class="card-body section_body p-2"> --}}
         @if(count($posts) > 0)
            @foreach ($posts as $post)
               <div class="card mb-2 card-trans-4">

                  <div class="card-header card_header p-2">
                     <i class="far fa-newspaper"></i>
                     {{ $post->title }}
                  </div>

                  <div class="card-body card_body">
                     <div class="row">
                     
                        <div class="col-1 px-3">
                           @if ($post->user->image)
                              {{-- {{ Html::image("_profiles/" . $post->user->image, "",array('height'=>'60','width'=>'60')) }} --}}
                              <img src="_profiles/{{ $post->user->image }}" alt="" height="60" width="60">
                           @else
                              <i class="fa fa-3x fa-user" aria-hidden="true"></i>
                           @endif                  
                        </div>

                        <div class="col-9 px-2">
                           <p>{!! substr(strip_tags($post->body), 0, 250) !!} {{ strlen(strip_tags($post->body)) > 250 ? ' [More]...' : '' }}</p>
                        </div>

                        <div class="col px-2 text text-right">
                           <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-sm btn-primary">
                              <i class="fa fa-chevron-right"></i> Read More
                           </a>
                        </div>
                     
                     </div>
                  </div>

                  <div class="card-footer card_footer p-1 card-trans-2">
                     Created by @include('common.authorFormat', ['model'=>$post, 'field'=>'user'])
                     on @include('common.dateFormat', ['model'=>$post, 'field'=>'created_at'])
                  </div>

               </div>
            @endforeach

            <div class="pb-2">
               {{-- {{ $posts->links('vendor.pagination.simple-bootstrap-4') }} --}}
               {{ $posts->links() }}
            </div>
         @else
            <div class="card mb-2 card-trans-4">
               <div class="card-body p-2">
                  {{ Config::get('settings.noRecordsFound') }}
               </div>
            </div>
         @endif
      {{-- </div>
   </div> --}}

@endsection
