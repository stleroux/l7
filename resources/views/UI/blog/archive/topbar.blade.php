         <!-- Only show if coming from the blog archive page -->
         @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.archive')
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Blog
            </a>
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">
               <i class="fas fa-blog"></i> Archive
            </a>
         @endif