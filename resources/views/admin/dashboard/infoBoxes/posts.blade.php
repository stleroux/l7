<!-- POSTS -->

<div class="col">
   <a href="{{ route('admin.posts.index') }}">
      <div class="info-box">
         <span class="info-box-icon bg-info elevation-1">
            <i class="{{ config('icons.posts') }}"></i>
         </span>

         <div class="info-box-content">
            <span class="info-box-text h4">Posts</span>
            @if(Auth::user()->can('recipe-list'))
               <span class="info-box-text">
                  Published : {{ $userPostsPublishedCount }}
                  <br />
                  Unpublished : {{ $userPostsUnpublishedCount }}
                  <br />
                  Future : {{ $userPostsFutureCount }}
                  <br />
                  Trashed : {{ $userPostsTrashedCount }}
                  <br />
                  <span class="info-box-number">
                     Total : {{ $userPostsTotalCount }}
                     <br />
                     Overall Total : {{ $postsCount }}                     
                  </span>
               </span>
            @else
               <span class="info-box-number">
                  Total : {{ $postsCount }}
               </span>
            @endif

         </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
   </a>
</div><!-- /.col -->
