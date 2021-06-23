@extends ('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.blog') }}"></i>
   Blog
@endsection

@section('rightColumn')
   @include('UI.blog.blocks.search')
   @include('UI.blog.blocks.archives')
   @include('UI.blog.blocks.popular')
   @include('UI.blog.blocks.faqs')
@endsection

@section('topbar')
   {{-- @include('UI.blog.topbar') --}}
@endsection

@section('content')

   @if(count($posts) > 0)
      @foreach ($posts as $post)
         <div class="card mb-2 card-trans-4">

            <div class="card-header card_header p-2">
               <i class="far fa-newspaper"></i>
               {{ $post->title }}

               <span class="float-right font-weight-normal">
                  {{-- @if($post->likes()->count() > 0)
                     @if($post->likes()->count() == 1)
                        <small class="text-steel">Liked {{ $post->likes()->count() }} time by others</small>
                     @else
                        <small class="text-steel">Liked {{ $post->likes()->count() }} times by others</small>
                     @endif
                  @else
                     <small class="text-steel">Not liked by anyone yet</small>
                  @endif --}}
                  <small class="text-steel">
                     Likes : {{ $post->likes()->count() }} / 
                     Views : {{ views($post)->count() }}
                  </small>
               </span>

            </div>

            <div class="card-body card_body">
               <div class="row">
               
                  <div class="col-1 px-3">
                     @if ($post->user->image)
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

               {{-- @include('common.likeTopbar', ['model' => $post]) --}}
               <div class="form-inline float-right p-0 m-0">
   
                  @can('like', $post)
                     <form class="p-0 m-0" action="{{ route('like') }}" method="POST">
                        @csrf
                        <input type="hidden" name="likeable_type" value="{{ get_class($post) }}"/>
                        <input type="hidden" name="id" value="{{ $post->id }}"/>
                        <button class="btn btn-sm btn-success">@lang('Like')</button>
                     </form>
                  @else
                     <form class="" action="{{ route('unlike') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="likeable_type" value="{{ get_class($post) }}"/>
                        <input type="hidden" name="id" value="{{ $post->id }}"/>
                        <button class="btn btn-sm btn-danger">@lang('Unlike')</button>
                     </form>
                  @endcan

               </div>

            </div>

         </div>
      @endforeach

      <div class="pb-2">

         {{ $posts->links() }}
      </div>
   @else
      <div class="card mb-2 card-trans-4">
         <div class="card-body p-2">
            {{ config('settings.noRecordsFound') }}
         </div>
      </div>
   @endif

@endsection
