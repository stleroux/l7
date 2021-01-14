@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))

   @if($recipe->personal == 0)
      <a href="{{ route('admin.recipes.privatize', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
         title="Make Private">
         <i class="{{ config('icons.public') }} text-success"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('admin.recipes.publicize', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
         title="Make Public">
         <i class="{{ config('icons.private') }} text-danger"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif

@endif
