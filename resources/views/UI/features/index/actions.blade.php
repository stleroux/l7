<div class="row float-right">

   @if($feature->status != "Rejected" && $feature->status != "Implemented")

      @if($feature->user_id != Auth::id())
         @can('like', $feature)
            <form class="pr-1" action="{{ route('like') }}" method="POST">
               @csrf
               <input type="hidden" name="likeable_type" value="{{ get_class($feature) }}"/>
               <input type="hidden" name="id" value="{{ $feature->id }}"/>
               <button class="btn btn-block btn-sm btn-success text-dark font-weight-bold">@lang('Like')</button>
            </form>
         @else
            <form class="pr-1" action="{{ route('unlike') }}" method="POST">
               @csrf
               @method('DELETE')
               <input type="hidden" name="likeable_type" value="{{ get_class($feature) }}"/>
               <input type="hidden" name="id" value="{{ $feature->id }}"/>
               <button class="btn btn-block btn-sm btn-danger text-dark"><strong>@lang('Unlike')</strong></button>
            </form>
         @endcan
      @endif

   @endif

   @if($feature->status == 'New' || $feature->status == 'Pending')
      @if($feature->user_id == Auth::id())
         <a href="#"
            class="destroy-model btn btn-sm btn-default mr-1"
            data-toggle="modal"
            data-target="#destroyModal"
            data-id="{{ $feature->id }}"
            data-url="{{ url('features', $feature->id) }}">
            <i class="{{ config('icons.trash') }} text-pink"></i>
            Trash
         </a>

         <a href="{{ route('features.edit', $feature) }}" class="btn btn-sm btn-default mr-1">
            <i class="{{ config('icons.edit') }} text-primary"></i>
            Edit
         </a>
      @endif
   @endif
   
   <a href="{{ route('features.show', $feature) }}" class="btn btn-sm btn-default mr-1">
      <i class="{{ config('icons.view') }} text-primary"></i>
      View
   </a>

</div>
