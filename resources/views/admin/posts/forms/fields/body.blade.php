<div class="form-group">
   {{-- {{ Form::label ('body', 'Body', ['class' => 'required']) }} --}}
   <label for="body" class="required">Body</label>
   {{-- {{ Form::textarea ('body', null, ['class' => 'form-control form-control-sm wysiwyg', 'id'=>'wysiwyg']) }} --}}
   <textarea name="body" id="wysiwyg" rows="5" class="form-control form-control-sm wysiwyg">{{ old('body') ?? $post->body }}</textarea>
   <div class="pl-1 bg-danger">{{ $errors->first('body') }}</div>
</div>
