<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.posts.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.posts.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.posts') }}"></i>
         All Post
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Post::count() }}
         </div>
      </a>

      <a href="{{ route('admin.posts.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.posts.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Posts
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Post::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
