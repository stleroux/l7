<!-- TAGS -->

<div class="col-12">

   <div class="form-group">

      <label for="tag_id">Tags</label>

      @if(Route::currentRouteName('') == 'admin.carvings.show')
      
         @if($carving->tags->count() > 0)
            <div class="col p-1 m-0 bg-gray-light">
               @foreach($carving->tags as $t)
                  <span class="lead">
                     <span class="badge badge-secondary">
                        {{ ucwords($t->name) }}                     
                     </span>
                  </span>
               @endforeach               
            </div>            
         @else
            <div class="col p-1 m-0 bg-gray-light">N/A</div>
         @endif
   
      @else

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
   
      @endif
   
   </div>

</div>
