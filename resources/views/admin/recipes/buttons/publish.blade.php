@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-publish'))

   @if($recipe->published_at)
      <a href="{{ route('admin.recipes.unpublish', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
         title="Unpublish Recipe">
         <i class="{{ Config::get('icons.publish') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @else
      <a href="{{ route('admin.recipes.publish', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-outline-secondary"
         title="Publish Recipe">
         <i class="{{ Config::get('icons.publish') }}"></i>
         {{ $btn_label ?? '' }}
      </a>
   @endif

@endif
