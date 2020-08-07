@if($finishes->count() > 0)

      <table class="table table-hover table-sm" id="datatable">

         <thead>
            <tr>
               <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
               <th>ID</th>
               <th>Name</th>
               <th>Type</th>
               <th>Color Name</th>
               <th>Sheen</th>
               <th>Created On</th>
               <th>Updated On</th>
               <th class="no-sort" width="30px">Actions</th>
            </tr>
         </thead>
         
         <tbody>
            @foreach ($finishes as $finish)
               <tr>
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $finish->id }}"
                        id="{{ $finish->id}}" />
                        <label for="{{ $finish->id }}"></label>
                     </div>
                  </td>
                  <td>{{ $finish->id }}</td>
                  <td><a href="{{ route('admin.projects.finishes.show', $finish->id) }}">{{ $finish->name }}</a></td>
                  <td>{{ $finish->type }}</td>
                  <td>{{ $finish->color_name }}</td>
                  <td>{{ $finish->sheen }}</td>
                  {{-- Add more columns here --}}
                  <td data-order="{{ $finish->created_at}}">{{ $finish->created_at }}</td>
                  <td data-order="{{ $finish->updated_at}}">{{ $finish->updated_at ? $finish->updated_at->format('M d, Y') : 'no data found' }}</td>
                  <td class="text-right">
                     @include('admin.projects.finishes.index.actions')
                  </td>
               </tr>
            @endforeach
         </tbody>
         
      </table>

@else
   {{ Config::get('settings.noRecordsFound') }}
@endif
