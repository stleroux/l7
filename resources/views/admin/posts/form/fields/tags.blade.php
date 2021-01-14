<!-- TAGS -->

<div class="form-group">

   <label for="tag_id">Tags</label>

   <select class="form-control form-control-sm select2" data-style="btn-sm btn-light" id="tags" name="tags[]" multiple >

      @foreach ($tags as $tag)

         @if(last(request()->segments()) === 'create')
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
         @endif

         @if(last(request()->segments()) === 'edit')
            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? "selected='selected" : ""}}>{{ $tag->name }}</option>               
         @endif

      @endforeach

   </select>

   <div class="pl-1 bg-danger">{{ $errors->first('tag') }}</div>

</div>
