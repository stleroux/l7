@if($materials->count() > 0)

   <table id="datatable" class="table table-hover table-sm">
      
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
            <th>Created On</th>
            <th>Updated On</th>
            <th class="no-sort" width="30px">Actions</th>
         </tr>
      </thead>
      
      <tbody>
         @foreach ($materials as $material)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $material->id }}"
                     id="{{ $material->id}}" />
                     <label for="{{ $material->id }}"></label>
                  </div>
               </td>
               <td>{{ $material->id }}</td>
               <td><a href="{{ route('admin.projects.materials.show', $material->id) }}">{{ $material->name }}</a></td>
               <td>{{ $material->type }}</td>
               {{-- Add more columns here --}}
               <td data-order="{{ $material->created_at}}">{{ $material->created_at }}</td>
               <td data-order="{{ $material->updated_at}}">{{ $material->updated_at ? $material->updated_at->format('M d, Y') : 'no data found' }}</td>
               <td class="text-right">
                  @include('admin.projects.materials.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>

   </table>
   
@else
   {{ Config::get('settings.noRecordsFound') }}
@endif
