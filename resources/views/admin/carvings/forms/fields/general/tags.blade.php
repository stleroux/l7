<!-- TAGS -->

<div class="col-12">
   

   <div class="form-group">

      <label for="tag_id">Tags</label>

      {{-- <div class="float-right">
         <a href="{{ route('admin.tags.create') }}" target="_blank">Add new tag</a>
      </div> --}}

      <select class="form-control form-control-sm select2" data-style="btn-sm btn-light" id="tags" name="tags[]" multiple >

         @foreach ($tags as $tag)

            @if(last(request()->segments()) === 'create')
               <option value="{{ $tag->id }}">{{ ucfirst($tag->name) }}</option>
            @endif

            @if(last(request()->segments()) === 'edit')
               <option value="{{ $tag->id }}" {{ $carving->tags->contains($tag->id) ? "selected='selected" : "" }}>{{ ucfirst($tag->name) }}</option>               
            @endif

         @endforeach

      </select>

      <div class="pl-1 bg-danger">{{ $errors->first('tag') }}</div>

   </div>

</div>
