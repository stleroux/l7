<!-- PAGE -->

<div class="form-group">

   <label for="page" class="{{ $required ?? '' }}">
      {{ $label ?? 'Page' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.blocks.show')

      <div class="p-1 m-0 bg-gray-light">
         {{ $block->page ?? 'N/A' }}
      </div>

   @else

      {{-- <input
         type="text"
         name="page"
         id="page"
         class="form-control form-control-sm @error('page') is-invalid @enderror"
         value="{{ old('page') ?? $block->page }}"
         placeholder="Page"
         data-inputmask=""
      /> --}}

      <select name="page" id="page" class="form-control form-control-sm @error('page') is-invalid @enderror">
         @foreach($block->pageOptions() as $pageOptionKey => $pageOptionValue)
            <option value="{{$pageOptionKey}}" {{ $block->page == $pageOptionValue ? 'selected' : '' }}>{{ $pageOptionValue }}</option>
         @endforeach
      </select>

   @endif
   
   @error('page')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>