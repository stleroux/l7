<table class="table table-hover table-sm" id="datatable">
  <thead>
    <tr>
      <th class="no-sort" width="30px">
         <div class="icheck-primary d-inline">
            <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
            <label for="checkbox_all"></label>
         </div>
      </th>
      <th>#</th>
      <th>Name</th>
      <th>Description</th>
      <th class="d-none d-lg-table-cell">Created</th>
      <th class="d-none d-lg-table-cell">Updated</th>
      <th class="no-sort" width="30px">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach($permissions as $permission)
    <tr class="{{ ($permission->deleted_at ? 'text-danger' : '') }}">
      <td>
         <div class="icheck-primary d-inline">
            <input
               type="checkbox"
               class="record checkbox_record"
               name="entries_to_delete[]"
               onchange="showHide(this.checked)"
               value="{{ $permission->id }}"
               id="{{ $permission->id}}" />
            <label for="{{ $permission->id }}"></label>
         </div>
      </td>
      <td>{{ $permission->id }}</td>
      <td>{{ $permission->name }}</td>
      <td>{{ $permission->description }}</td>
      <td nowrap="nowrap" title="@if($permission->created_at){{ $permission->created_at }}@endif">
         {{ $permission->created_at->toDateString() }}
      </td>
      <td title="@if($permission->updated_at){{ $permission->updated_at }}@endif">
         {{ $permission->updated_at->toDateString() }}
      </td>
      <td>
         @include('admin.permissions.index.actions')
      </td>
    </tr>
    @endforeach
  </tbody>
</table>