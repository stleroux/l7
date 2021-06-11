{{-- SOURCE --}}

<div class="form-group">

   <label for="source" class="col-form-label {{ $required ?? '' }}">Source</label>

   @if(Route::currentRouteName('') == 'admin.posts.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $post->source ?? 'N/A' !!}
      </div>

   @else

      <input
      	type="text"
      	name="source"
      	id="source"
      	value="{{ old('source') ?? $post->source }}"
      	class="form-control form-control-sm @error('source') is-invalid @enderror"
      />
      
      @error('source')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   @endif

</div>
