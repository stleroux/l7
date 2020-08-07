{{-- @if(checkPerm('recipe_read')) --}}
   <a href="{{ route('recipes.printPDF', $recipe->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary"
      title="Print Recipe to PDF">
      <i class="{{ Config::get('icons.pdf') }}"></i>
      <div class="d-none d-lg-inline">
      	{{ $btn_label ?? '' }}
      </div>
   </a>
{{-- @endif --}}
