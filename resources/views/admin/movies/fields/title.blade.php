<!-- TITLE -->
<div class="form-group">
   <label for="title" class="required">Title</label>
   {{-- {!! Form::text('title', null, ['class' => 'form-control form-control-sm', 'autofocus', 'onfocus' => 'this.focus();this.select()']) !!} --}}
   <input type="text" name="title" value="{{ old('title') ?? $movie->title }}" class="form-control form-control-sm @error('title') is-invalid @enderror">
   
    @error('title')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   	@enderror

</div>

