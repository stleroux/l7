<!-- QUESTION -->

<div class="col-xs-12 col-sm-9">
   
   <div class="form-group">
      
      <label for="question" class="required">Question</label>

      @if(Route::currentRouteName('') == 'admin.faqs.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $faq->question !!}
         </div>

      @else
      
         <input
            type="text"
            name="question"
            id="question"
            class="form-control form-control-sm required @error('question') is-invalid @enderror"
            value="{{ old('question') ?? $faq->question }}"
            autofocus
            onfocus="this.focus();this.select()">
            
      @endif
      
      @error('question')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
