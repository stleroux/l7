<div class="row">

   <div class="col mb-2 text-center">

      @if($previous)
         <a href="{{ route('projects.show', $previous) }}"
            class="btn btn-sm btn-secondary"
            title="Previous Project">
            <i class="{{ config('icons.previous') }}"></i>
            Previous Project
         </a>
      @endif

      @if($next)
         <a href="{{ route('projects.show', $next) }}"
            class="btn btn-sm btn-secondary"
            title="Next Project">
            Next Project
            <i class="{{ config('icons.next') }}"></i>
         </a>
      @endif

   </div>

   <div class="col mb-2 float-right px-1">
      <div class="form-inline float-right p-0 m-0">
         @auth
            @can('like', $project)
               <form class="p-0 m-0" action="{{ route('like') }}" method="POST">
                  @csrf
                  <input type="hidden" name="likeable_type" value="{{ get_class($project) }}"/>
                  <input type="hidden" name="id" value="{{ $project->id }}"/>
                  <button class="btn btn-sm btn-success">@lang('Like')</button>
               </form>
            @else
               <form class="" action="{{ route('unlike') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="likeable_type" value="{{ get_class($project) }}"/>
                  <input type="hidden" name="id" value="{{ $project->id }}"/>
                  <button class="btn btn-sm btn-danger">@lang('Unlike')</button>
               </form>
            @endcan
         @endauth
      </div>
   </div>

   <div class="d-flex mb-2">
      <div class="float-right">

{{--       <a href="#"
         class="btn btn-sm btn-dark">
         <i class="{{ config('icons.addToCart') }}"></i>
         Add to Cart
      </a> --}}

         @if (url()->previous() == request()->root() . '/UI/search')
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         @endif

         <a href="{{ route('projects.index') }}"
            class="btn btn-sm btn-secondary">
            <i class="{{ config('icons.back') }}"></i>
            Projects
         </a>
      </div>

   </div>
   
</div>
