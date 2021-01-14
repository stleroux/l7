@if($users->count() > 0)
   
   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            {{-- @if(Route::currentRouteName() == 'admin.users.index') --}}
               <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
            {{-- @endif --}}
            <th>#</th>
            <th>Username</th>
            {{-- <th class="d-none d-sm-table-cell">First Name</th> --}}
            {{-- <th class="d-none d-sm-table-cell">Last Name</th> --}}
            <th class="d-none d-sm-table-cell">Email</th>
            {{-- <th class="d-none d-table-cell">Account Status</th> --}}
            <th class="d-none d-md-table-cell">Roles</th>
            <th class="d-none d-sm-table-cell">Company Name</th>
            <th class="d-none d-sm-table-cell" title="Dart DoubleOut">DDO</th>
            <th class="d-none d-lg-table-cell">Created</th>
            {{-- <th class="d-none d-lg-table-cell">Updated</th> --}}
            @if(Route::currentRouteName() == 'admin.users.trashed')
               <th class="d-none d-lg-table-cell">Deleted</th>
            @endif
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($users as $user)
            <tr class="{{ ($user->account_status == 1) ? 'text-dark' : 'text-danger' }}">
               {{-- @if(Route::currentRouteName() == 'admin.users.index') --}}
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                           type="checkbox"
                           class="record checkbox_record"
                           name="entries[]"
                           onchange="showHide(this.checked)"
                           value="{{ $user->id }}"
                           id="{{ $user->id}}" />
                        <label for="{{ $user->id }}"></label>
                     </div>
                  </td>
               {{-- @endif --}}
               <td>{{ $user->id }}</td>
               <td>{{ $user->username }}</td>
               {{-- <td class="d-none d-sm-table-cell">{{ $user->first_name }}</td> --}}
               {{-- <td class="d-none d-sm-table-cell">{{ $user->last_name }}</td> --}}
               <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
               {{-- <td class="d-none d-table-cell">
                  @if($user->account_status)
                     <span class="badge badge-success">Approved</span>
                  @else
                     <span class="badge badge-danger">Inactive</span>
                  @endif
               </td> --}}
               <td class="d-none d-md-table-cell">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
               <td class="d-none d-sm-table-cell">{{ $user->company_name }}</td>
               <td class="d-none d-sm-table-cell">{{ $user->dart_doubleOut }}</td>
               <td class="d-none d-md-table-cell" title="@if($user->created_at){{ $user->created_at }}@endif">{{ $user->created_at->toDateString() }}</td>
               {{-- <td class="d-none d-md-table-cell" title="@if($user->updated_at){{ $user->updated_at }}@endif">{{ $user->updated_at->toDateString() }}</td> --}}
               @if(Route::currentRouteName() == 'admin.users.trashed')
                  <td title="@if($user->deleted_at){{ $user->deleted_at }}@endif">@if($user->deleted_at){{ $user->deleted_at->toDateString() }}@endif</td>
               @endif
               <td class="text-right">
                  @include('admin.users.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif