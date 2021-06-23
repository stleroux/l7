<div class="row">

   <div class="col mb-2 text-center">
   </div>

   @if($feature->status != "Rejected" && $feature->status != "Implemented")
      <div class="col mb-2 float-right px-1">
         {{-- @include('common.likeTopbar', ['model' => $feature]) --}}
         <div class="form-inline float-right p-0 m-0">
            @can('like', $feature)
               <form class="p-0 m-0" action="{{ route('like') }}" method="POST">
                  @csrf
                  <input type="hidden" name="likeable_type" value="{{ get_class($feature) }}"/>
                  <input type="hidden" name="id" value="{{ $feature->id }}"/>
                  <button class="btn btn-sm btn-success">@lang('Like')</button>
               </form>
            @else
               <form class="" action="{{ route('unlike') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="likeable_type" value="{{ get_class($feature) }}"/>
                  <input type="hidden" name="id" value="{{ $feature->id }}"/>
                  <button class="btn btn-sm btn-danger">@lang('Unlike')</button>
               </form>
            @endcan
         </div>
      </div>
   @endif

   <div class="d-flex mb-2">

      <div class="float-right">

         <a href="{{ route('features.index') }}"
            class="btn btn-sm btn-light border">
            <i class="{{ config('icons.back') }}"></i>
            <div class="d-none d-lg-inline">
               Cancel
            </div>
         </a>

         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ config('icons.help') }}"></i>
            <div class="d-none d-lg-inline">
               Help
            </div>
         </a>

      </div>

   </div>

</div>
