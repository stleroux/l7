{{-- IMAGE --}}

<div class="form-group">

   <label for="image" class="col-form-label {{ $required ?? '' }}">Image</label>

   @if(Route::currentRouteName('') == 'admin.posts.show')

      @if($post->image)
         <div class="p-1 m-0 bg-gray-light">
            {!! $post->image ?? 'N/A' !!}
            {{-- <img src="_posts\{{ $post->image }}" alt=""> --}}
         </div>
         <img src="{{url('/_posts/'.$post->image)}}" alt="Image" />
      @else
         No Image Selected
      @endif

      @else

         @if($post->image)
            <img src="{{url('/_posts/'.$post->image)}}" alt="Image" width="250px" />
         @else
            No Image Selected
         @endif

         <input
         	type="file"
         	name="image"
         	id="image"
         	value="{{ old('image') ?? $post->image }}"
         	class="form-control @error('image') is-invalid @enderror p-1"
         />

         <span class="help-block"><small>Only choose new image to replace the existing one.</small></span>
         
         @error('image')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

      @endif

</div>
