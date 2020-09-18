<div class="row d-flex pb-2">
   {{-- <div class="col-sm-4 float-left">
      {{ ucwords($post->title) }}
   </div> --}}
   <div class="col-xl-9">
      @include('UI.blog.buttons.previous', ['size'=>'sm'])
      @include('UI.blog.buttons.next', ['size'=>'sm'])
   </div>
   <div class="col-xl-3 text text-right">
      {{-- <div class="btn-group"> --}}

         @auth
            <a href="" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#printModal" data-link="{{ $post->slug }}">
               <i class="fa fa-print"></i> Print
            </a>
         @endauth

         <!-- Only show if coming from the homepage -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'homepage')
            <a href="{{ route('homepage') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-home"></i> Home
            </a>
         @endif

         <!-- Only show if coming from the blog page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.index')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
         @endif

         <!-- Show this button after posting a comment -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.show')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
         @endif

         <!-- Only show if coming from the blog print page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.print')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
         @endif

         <!-- Only show if coming from the blog search page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.search')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Search
            </a>
         @endif

         <!-- Only show if coming from the blog archive page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.archive')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Archive
            </a>
         @endif
      {{-- </div> --}}
   </div>
</div>
