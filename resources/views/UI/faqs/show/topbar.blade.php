<div class="row">

   <div class="col mb-2 text-center">
   </div>

   @if($faq->status != "Rejected" && $faq->status != "Implemented")
      <div class="col mb-2 float-right px-1">

         <div class="form-inline float-right p-0 m-0">
            @can('like', $faq)
               <form class="p-0 m-0" action="{{ route('like') }}" method="POST">
                  @csrf
                  <input type="hidden" name="likeable_type" value="{{ get_class($faq) }}"/>
                  <input type="hidden" name="id" value="{{ $faq->id }}"/>
                  <button class="btn btn-sm btn-success">@lang('Like')</button>
               </form>
            @else
               <form class="" action="{{ route('unlike') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="likeable_type" value="{{ get_class($faq) }}"/>
                  <input type="hidden" name="id" value="{{ $faq->id }}"/>
                  <button class="btn btn-sm btn-danger">@lang('Unlike')</button>
               </form>
            @endcan
         </div>

      </div>
   @endif

   <div class="d-flex mb-2">

      <div class="float-right">
         @if (url()->previous() == request()->root() . '/UI/search')
            <a href="#" class="btn btn-sm btn-secondary" onclick="history.back()">Search Results</a>
         @endif
      </div>

   </div>

</div>
