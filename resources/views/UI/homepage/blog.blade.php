{{-- BLOG --}}

@if(\Config::get('settings.blog') == 'visible')
   @if($posts->count() > 0)
       <div class="card card-trans-0 mb-2 border-red-2">
         <div class="card-header section_header p-2">
            <i class="far fa-newspaper"></i>
            Latest Posts
         </div>
         <div class="card-body p-2">
            @if(count($posts) > 0)
               @foreach ($posts as $post)
                  <div class="card card-trans-4 mb-2 border-black-2">
                     <div class="card_header p-2">{{ $post->title }}</div>
                     <div class="card_body p-2">
                        <div class="row">
                        <div class="col-sm-10">
                           {!! substr($post->body, 0, 250) !!}
                           {!! strlen($post->body) > 250 ? " [More]..." : "" !!}
                        </div>
                        <div class="col-sm-2">
                           <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-sm btn-primary float-right">
                           <div class="text text-left">
                              <i class="fa fa-chevron-right"></i> More
                           </div>
                           </a>
                        </div>
                        </div>
                     </div>
                     <div class="card-footer card_footer pl-2 p-1">
                        Created by
                        @include('common.authorFormat', ['model'=>$post, 'field'=>'user'])
                        on @include('common.dateFormat', ['model'=>$post, 'field'=>'created_at'])
                     </div>
                  </div>
               @endforeach
            @else
               No Records Found
            @endif
         </div>
      </div>
   @endif
@endif
