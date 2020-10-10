<!-- TITLE -->
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
   <label for="title" class="required">Title</label>
   {{-- {!! Form::text('title', null, ['class' => 'form-control form-control-sm', 'autofocus', 'onfocus' => 'this.focus();this.select()']) !!} --}}
   <input type="text" name="title" value="{{ old('title') ?? $movie->title }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('title') }}</div>
</div>

