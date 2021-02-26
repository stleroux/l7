@if($tags->count() > 0)

   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            <th class="d-none d-lg-table-cell">#</th>
            <th>Name</th>
            <th>Category</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($tags as $tag)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $tag->id }}"
                        id="{{ $tag->id}}" />
                     <label for="{{ $tag->id }}"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell">{{ $tag->id }}</td>
               <td nowrap="nowrap">{{ $tag->name }}</td>
               <td nowrap="nowrap">{{ $tag->category }}</td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($tag->created_at){{ $tag->created_at }}@endif">
                  {{ $tag->created_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="d-none d-lg-table-cell" title="@if($tag->updated_at){{ $tag->updated_at }}@endif">
                  {{ $tag->updated_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="text-right">
                  @include('admin.tags.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif
