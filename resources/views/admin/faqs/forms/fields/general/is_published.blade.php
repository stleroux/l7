{{-- PUBLISHED --}}

<div class="col-xs-12 col-sm-4 col-md-2">

   <div class="form-group">
   
      <label for="is_published" class="{{ $required ?? '' }}">
         {{ $label ?? 'Published' }}
      </label>

      <br />
      
      @if(Route::currentRouteName('') == 'admin.faqs.show')

         <div class="p-1 m-0 bg-gray-light">
            {{ $faq->is_published ? 'Yes' : 'No' }}
         </div>

      @else

         <input
            type="checkbox"
            name="is_published"
            id="is_published"
            class="form-control"
            data-bootstrap-switch
            data-off-color="danger"
            data-off-text="No"
            data-on-color="success"
            data-on-text="Yes"
            placeholder="Status"
            data-inputmask=""
            @if($faq->is_published || old('is_published')) checked @endif
            {{ $disabled ?? '' }}
         />

      @endif

      @error('is_published')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>

</div>
