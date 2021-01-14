@if($roles->count() > 0)

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
            <th class="d-none d-lg-table-cell">Permissions</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($roles as $role)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $role->id }}"
                        id="{{ $role->id}}" />
                     <label for="{{ $role->id }}"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell">{{ $role->id }}</td>
               <td nowrap="nowrap">{{ $role->name }}</td>
               <td class="d-none d-lg-table-cell">{{ implode(', ', $role->permissions()->get()->pluck('name')->toArray()) }}</td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($role->created_at){{ $role->created_at }}@endif">{{ $role->created_at->toDateString() }}</td>
               <td class="d-none d-lg-table-cell" title="@if($role->updated_at){{ $role->updated_at }}@endif">{{ $role->updated_at->toDateString() }}</td>
               <td class="text-right">
                  @include('admin.roles.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif
