@if($carvings->count() > 0)

   {{-- <table class="table table-hover table-sm table-striped bg-steel-light" id="datatable"> --}}
   <table class="table table-hover table-sm" id="datatable">

      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            {{-- <th>#</th> --}}
            <th>Name</th>
            <th>Category</th>
            <th>Tags</th>
            <th>Views</th>
            <th>Likes</th>
            <th>Images</th>
            <th>Finish(es)</th>
            <th>Material(s)</th>
            {{-- <th>Created On</th> --}}
            {{-- <th>Updated On</th> --}}
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($carvings as $carving)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $carving->id }}"
                     id="{{ $carving->id}}" />
                     <label for="{{ $carving->id }}"></label>
                  </div>
               </td>
               {{-- <td>{{ $carving->id }}</td> --}}
               <td><a href="{{ route('admin.carvings.show', $carving->id) }}">{{ ucwords($carving->name) }}</a></td>
               <td>{{ $carving->category }}</td>
               <td>
                  @foreach($carving->tags as $tag)
                     <div class="badge badge-secondary">
                        {{ ucwords($tag->name) }}                        
                     </div>
                  @endforeach
               </td>
               <td>{{ $carving->views }}</td>
               <td>{{ $carving->likes()->count() }}</td>
               <td>{{ $carving->images()->count() }}</td>
               <td>{{ $carving->finishes()->count() }}</td>
               <td>{{ $carving->materials()->count() }}</td>
               {{-- <td nowrap="nowrap" title="@if($carving->created_at){{ $carving->created_at }}@endif">{{ $carving->created_at->toDateString() }}</td> --}}
               {{-- <td title="@if($carving->updated_at){{ $carving->updated_at }}@endif">{{ $carving->updated_at->toDateString() }}</td> --}}
               <td class="text-right">
                  @include('admin.carvings.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>

   </table>
   
@else
   {{ config('settings.noRecordsFound') }}
@endif
