@if($categories->count() > 0)

   {{-- <div class="card-body section_body p-2"> --}}

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
               <th>Category Name</th>
               <th>Parent Category</th>
               {{-- <th>Created</th> --}}
               {{-- <th>Updated</th> --}}
               @if(Route::currentRouteName() == 'admin.categories.trashed')
                  <th>Deleted</th>
               @endif
               <th class="no-sort"></th>
            </tr>
         </thead>

         <tbody>
            @foreach ($categories as $category)
               <tr class="{{ ($category->deleted_at ? 'text-danger' : '') }}">
                  <td>
                     <div class="icheck-primary d-inline">
                        <input
                           type="checkbox"
                           class="record checkbox_record"
                           name="entries[]"
                           onchange="showHide(this.checked)"
                           value="{{ $category->id }}"
                           id="{{ $category->id}}" />
                        <label for="{{ $category->id }}"></label>
                     </div>
                  </td>
                  <td>{{ $category->id }}</td>
                  <td>{{ ucfirst($category->name) }}</td>
                  <td>
                     {{ $category->parent_id ? ucfirst($category->parent->name) : '' }} <small>(Parent:{{ $category->parent_id }})</small>
                  </td>
                  {{-- <td title="@if($category->created_at){{ $category->created_at }}@endif">{{ $category->created_at->toDateString() }}</td> --}}
                  {{-- <td title="@if($category->updated_at){{ $category->updated_at }}@endif">{{ $category->updated_at->toDateString() }}</td> --}}
                  @if(Route::currentRouteName() == 'admin.categories.trashed')
                     <td title="@if($category->deleted_at){{ $category->deleted_at }}@endif">@if($category->deleted_at){{ $category->deleted_at->toDateString() }}@endif</td>
                  @endif
                  <td class="text-right">
                     @include('admin.categories.index.actions')
                  </td>
               </tr>
            @endforeach

         </tbody>

      </table>

   {{-- </div> --}}
   
@else
   {{-- <div class="card-body p-0 m-0"> --}}
      {{ config('settings.noRecordsFound') }}
   {{-- </div> --}}
@endif
