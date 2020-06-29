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
      <th class="d-none d-sm-table-cell">Permissions</th>
      <th class="d-none d-lg-table-cell">Created</th>
      <th class="d-none d-lg-table-cell">Updated</th>
      <th class="d-none d-lg-table-cell">Deleted</th>
      <th class="no-sort" width="30px">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach($roles as $role)
    <tr class="{{ ($role->deleted_at ? 'text-danger' : '') }}">
      <td>
         <div class="icheck-primary d-inline">
            <input
               type="checkbox"
               class="record checkbox_record"
               name="entries_to_delete[]"
               onchange="showHide(this.checked)"
               value="{{ $role->id }}"
               id="{{ $role->id}}" />
            <label for="{{ $role->id }}"></label>
         </div>
      </td>
      <td>{{ $role->id }}</td>
      <td nowrap="nowrap">{{ $role->name }}</td>
      <td class="d-none d-md-table-cell">{{ implode(', ', $role->permissions()->get()->pluck('name')->toArray()) }}</td>
      <td nowrap="nowrap" title="@if($role->created_at){{ $role->created_at }}@endif">{{ $role->created_at->toDateString() }}</td>
      <td title="@if($role->updated_at){{ $role->updated_at }}@endif">{{ $role->updated_at->toDateString() }}</td>
      <td title="@if($role->deleted_at){{ $role->deleted_at }}@endif">@if($role->deleted_at){{ $role->deleted_at->toDateString() }}@endif</td>
      <td>
         @include('admin.roles.index.actions')
      </td>
    </tr>
    @endforeach
  </tbody>
</table>