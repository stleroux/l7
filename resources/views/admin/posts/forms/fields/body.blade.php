<div class="form-group">
   
   <label for="body" class="required">Body</label>
   
   @if(Route::currentRouteName('') == 'admin.posts.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $post->body ?? 'N/A' !!}
         </div>

      @else

         <textarea name="body" id="wysiwyg" rows="5" class="form-control form-control-sm wysiwyg @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
         
         @error('body')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

      @endif
</div>
