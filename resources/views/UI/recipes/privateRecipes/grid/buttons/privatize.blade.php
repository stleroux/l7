{{-- @if(checkPerm('recipe', $recipe)) --}}
   @if($recipe->personal == 0)
      <a href="{{ route('recipes.publicize', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Make Public">
         <i class="{{ Config::get('icons.public') }} text-success"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('recipes.privatize', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Make Private">
         <i class="{{ Config::get('icons.private') }} text-danger"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif
{{-- @endif --}}
