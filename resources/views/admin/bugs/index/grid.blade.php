@if($bugs->count() > 0)

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
            <th>Title</th>
            <th class="d-none d-lg-table-cell">Creator</th>
            <th class="d-none d-lg-table-cell">Status</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($bugs as $bug)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $bug->id }}"
                        id="{{ $bug->id}}" />
                     <label for="{{ $bug->id }}"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell">{{ $bug->id }}</td>
               <td nowrap="nowrap"><a href="{{ route('admin.bugs.show', $bug) }}">{{ $bug->title }}</a></td>
               <td nowrap="nowrap">{{ $bug->creator->username }}</td>
               <td nowrap="nowrap">{{ $bug->status }}</td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($bug->created_at){{ $bug->created_at }}@endif">{{ $bug->created_at->toDateString() }}</td>
               <td class="d-none d-lg-table-cell" title="@if($bug->updated_at){{ $bug->updated_at }}@endif">{{ $bug->updated_at->toDateString() }}</td>
               <td class="text-right">
                  @include('admin.bugs.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif
