<div class="row">
   {{-- <div class="col-sm-4 float-left">
      {{ ucwords($post->title) }}
   </div> --}}
   <div class="col mb-2 text-center">
      @include('UI.blog.buttons.previous', ['size'=>'sm'])
      @include('UI.blog.buttons.next', ['size'=>'sm'])
   </div>

   <div class="col mb-2 float-right px-1">
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

   <div class="d-flex mb-2">
      
      <div class="float-right">

         @auth
            <a href="" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#printModal" data-link="{{ $post->slug }}">
               <i class="fa fa-print"></i> Print
            </a>
         @endauth


         <!-- Only show if coming from the homepage -->
         @if (url()->previous() == request()->root() . '/')
            <a href="{{ route('homepage') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-home"></i> Home
            </a>
         @endif

         <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
            <i class="fas fa-blog"></i> Blog
         </a>

         @if (url()->previous() == request()->root() . '/UI/search')
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         @endif

         <!-- Only show if coming from the blog print page -->
         @if (url()->previous() == request()->root() . '/blog/print')
         {{-- @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.print') --}}
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
         @endif

         <!-- Only show if coming from the blog search page -->
         @if (url()->previous() == request()->root() . '/blog/search')
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         @endif

         <!-- Only show if coming from the blog archive page -->
         @if (url()->previous() == request()->root() . '/blog/archive')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Archive
            </a>
         @endif
      </div>

   </div>

</div>
