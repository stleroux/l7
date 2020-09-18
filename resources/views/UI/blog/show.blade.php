@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.') }}"></i>
   {{ ucwords($post->title) }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
   <li class="breadcrumb-item">{{ ucwords($post->title) }}</li>
@endsection

@section('right_column')
   @include('UI.blog.blocks.search')
   @include('UI.blog.blocks.popular')
   @include('UI.blog.blocks.archives')
   @include('UI.blog.blocks.leaveComment')
@endsection

@section('topbar')
@endsection

@section('content')

   @include('UI.blog.show.topbar')
      {{-- <div class="card-header p-2">
         <div class="row d-flex justify-content-center">
            <div class="col-sm-4 float-left">
               {{ ucwords($post->title) }}
            </div>
            <div class="col-sm-4 text-center">
               @include('UI.blog.buttons.previous', ['size'=>'xs'])
               @include('UI.blog.buttons.next', ['size'=>'xs'])
            </div>
            <div class="col-sm-4 text text-right">
               <!-- <div class="btn-group"> -->

                  @auth
                     <a href="" type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#printModal" data-link="{{ $post->slug }}">
                        <i class="fa fa-print"></i> Print
                     </a>
                  @endauth

                  <!-- Only show if coming from the homepage -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'home')
                     <a href="{{ route('home') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-home"></i> Home
                     </a>
                  @endif

                  <!-- Only show if coming from the blog page -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.index')
                     <a href="{{ route('blog.index') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Blog
                     </a>
                  @endif

                  <!-- Show this button after posting a comment -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.show')
                     <a href="{{ route('blog.index') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Blog
                     </a>
                  @endif

                  <!-- Only show if coming from the blog print page -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.print')
                     <a href="{{ route('blog.index') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Blog
                     </a>
                  @endif

                  <!-- Only show if coming from the blog search page -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.search')
                     <a href="{{ route('blog.index') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Blog
                     </a>
                     <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Search
                     </a>
                  @endif              

                  <!-- Only show if coming from the blog archive page -->
                  @if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'blog.archive')
                     <a href="{{ route('blog.index') }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Blog
                     </a>
                     <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                        <i class="fas fa-blog"></i> Archive
                     </a>
                  @endif
               <!-- </div> -->
            </div>
         </div>
      </div> --}}


<div class="card card-trans-4">
   <div class="card-body">
      <div class="row">
         <div class="col-9">
            {!! $post->body !!}
         </div>
         <div class="col-3">
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Image</div>
               <div class="card-body p-1">
                  @if ($post->image)
                     {{-- @if(checkPerm('post_show')) --}}
                     @auth
                        <div class="text-center">
                           <a href="" data-toggle="modal" data-target="#imageModal">
                              {{-- {{ Html::image("_posts/" . $post->image, "", array('height'=>'100%','width'=>'100%')) }} --}}
                              <img src="/_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                           </a>
                           <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-primary">View Larger</a>
                           {{-- <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-success">View Extra Large</a> --}}
                        </div>
                     @else
                        {{-- {{ Html::image("_posts/" . $post->image, "", array('height'=>'100%','width'=>'100%')) }} --}}
                        <img src="/_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                     @endauth
                  @endif
               </div>
            </div>


            <div class="card mb-0 pb-0 card-trans-4">
               <div class="card-header card_header p-2">Information</div>
               {{-- <div class="card-body p-1"> --}}
                  <table class="table table-sm mb-0 pb-0">
                     <tbody>
                        <tr>
                           <th>Category</th>
                           <td>{{ ucfirst($post->category->name) }}</td>
                        </tr>
                        <tr>
                           <th>Published On</th>
                           <td>{{ $post->published_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <th>Views</th>
                           <td>{{ $post->views }}</td>
                        </tr>
                        <tr>
                           <th>Created By</th>
                           <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'user'])</td>
                        </tr>
                        <tr>
                           <th>Create Date</th>
                           <td>{{ $post->created_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <th>Updated By</th>
                           <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'modifiedBy'])</td>
                        </tr>
                        <tr>
                           <th>Update Date</th>
                           <td>{{ $post->updated_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               {{-- </div> --}}
            </div>

{{--             <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Category</div>
               <div class="card-body p-1">
                  {{ ucfirst($post->category->name) }}
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Published On</div>
               <div class="card-body p-1">
                  {{ $post->published_at }}
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Views</div>
               <div class="card-body p-1">
                  {{ $post->views }}
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Created By</div>
               <div class="card-body p-1">
                  @include('common.authorFormat', ['model'=>$post, 'field'=>'user'])
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Create Date</div>
               <div class="card-body p-1">
                  {{ $post->created_at }}
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Updated By</div>
               <div class="card-body p-1">
                  @include('common.authorFormat', ['model'=>$post, 'field'=>'modifiedBy'])
               </div>
            </div>
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-1">Update Date</div>
               <div class="card-body p-1">
                  {{ $post->updated_at }}
               </div>
            </div> --}}

         </div>
      </div>
   </div>
</div>



   {{-- <div class="card mb-3 card-trans-4">

      <div class="card-body section_body p-2">
         <div class="row">
            <div class="col-8 pr-1">
               <div class="row text-center">
                  <div class="col-3 pr-1">
                     <div class="card mb-2 card-trans-4">
                        <div class="card-header card_header p-1">Category</div>
                        <div class="card-body p-1">
                           {{ ucfirst($post->category->name) }}
                        </div>
                     </div>
                  </div>
                  <div class="col-3 px-1">
                     <div class="card mb-2 card-trans-4">
                        <div class="card-header card_header p-1">Published On</div>
                        <div class="card-body p-1">
                           {{ $post->published_at }}
                        </div>
                     </div>
                  </div>
                  <div class="col-3 pl-1">
                     <div class="card mb-2 card-trans-4">
                        <div class="card-header card_header p-1">Views</div>
                        <div class="card-body p-1">
                           {{ $post->views }}
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="card mb-2 card-trans-4">
                        <div class="card-header card_header p-1">Content</div>
                        <div class="card-body p-1"> --}}
                           {{-- @if(checkPerm('post_show')) --}}
                              {{-- {!! $post->body !!} --}}
                           {{-- @else
                              {!! substr(strip_tags($post->body), 0, 25) !!} {{ strlen(strip_tags($post->body)) > 25 ? ' [More]...' : '' }}
                           @endif --}}
                        {{-- </div> --}}
                        {{-- @if(!checkPerm('post_show'))
                           <div class="card-footer bg-danger px-1 py-0">
                              Register or login to see more!
                           </div>
                        @endif --}}
                     {{-- </div>
                  </div>
               </div>
            </div>
            <div class="col-4 pl-1">
               <div class="row">
                  <div class="col-12">
                     <div class="card mb-2 card-trans-4">
                        <div class="card-header card_header p-1">Image</div>
                        <div class="card-body p-1">
                           @if ($post->image) --}}
                              {{-- @if(checkPerm('post_show')) --}}
                              {{-- @auth
                                 <div class="text-center">
                                    <a href="" data-toggle="modal" data-target="#imageModal"> --}}
                                       {{-- {{ Html::image("_posts/" . $post->image, "", array('height'=>'100%','width'=>'100%')) }} --}}
                                    {{--    <img src="_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-primary">View Larger</a> --}}
                                    {{-- <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-success">View Extra Large</a> --}}
                              {{--    </div>
                              @else --}}
                                 {{-- {{ Html::image("_posts/" . $post->image, "", array('height'=>'100%','width'=>'100%')) }} --}}
{{--                                  <img src="_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                              @endauth
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
   {{--       </div>

         <div class="row text-center">
            <div class="col-4 pr-1">
               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-1">Created</div>
                  <div class="card-body p-0">
                     <div class="col">
                        <div class="row">
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">By</div>
                                 <div class="card-body p-1"> --}}
                                    {{-- {{ ucfirst($post->user->username) }} --}}
{{--                                     @include('common.authorFormat', ['model'=>$post, 'field'=>'user'])
                                 </div>
                              </div>
                           </div>
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">Date</div>
                                 <div class="card-body p-1">
                                    {{ $post->created_at }}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-4 px-1">
               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-1">Last Updated</div>
                  <div class="card-body p-0">
                     <div class="col">
                        <div class="row">
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">By</div>
                                 <div class="card-body p-1">
                                    @include('common.authorFormat', ['model'=>$post, 'field'=>'modifiedBy']) --}}
                                    {{-- @if($post->modified_by_id)
                                       {{ ucfirst($post->modifiedBy->username) }}
                                    @else
                                       N/A
                                    @endif --}}
                                 {{-- </div>
                              </div>
                           </div>
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">Date</div>
                                 <div class="card-body p-1">
                                       {{ $post->updated_at }} --}}
                                    {{-- @if($post->modified_by_id)
                                    @else
                                       N/A
                                    @endif --}}
{{--                                  </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}

{{--             <div class="col-4 pl-1">
               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-1">Last Viewed</div>
                  <div class="card-body p-0">
                     <div class="col">
                        <div class="row">
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">By</div>
                                 <div class="card-body p-1">
                                    Not Tracked
                                 </div>
                              </div>
                           </div>
                           <div class="col-6 px-0">
                              <div class="card card-trans-4">
                                 <div class="card-header card_header p-1">Date</div>
                                 <div class="card-body p-1">
                                    Not Tracked
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
         {{-- </div> --}}

         <div class="row m-0 p-0">
            <div class="col m-0 p-0">
               @include('UI.blog.show.comments')
            </div>
         </div>
      {{-- </div> --}}
   {{-- </div> --}}

   @include('UI.blog.show.imageModal')
   @include('UI.blog.show.imageModal_XL')
   @include('UI.blog.show.printModal')

@endsection
