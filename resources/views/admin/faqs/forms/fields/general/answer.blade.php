<!-- ANSWER -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   
   <div class="form-group">
      
      <label for="answer" class="required">Answer</label>

      @if(Route::currentRouteName('') == 'admin.faqs.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $faq->answer !!}
         </div>

      @else
      
         <textarea name="answer" id="answer" rows="3" class="wysiwyg form-control form-control-sm @error('answer') is-invalid @enderror">{{ old('answer') ?? $faq->answer }}</textarea>

      @endif
      
      @error('answer')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
