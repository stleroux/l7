@if($projects->count() > 0)

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
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Views</th>
            <th>Images</th>
            <th>Finish(es)</th>
            <th>Material(s)</th>
            <th>Created On</th>
            <th>Updated On</th>
            <th class="no-sort" width="30px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($projects as $project)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $project->id }}"
                     id="{{ $project->id}}" />
                     <label for="{{ $project->id }}"></label>
                  </div>
               </td>
               <td>{{ $project->id }}</td>
               <td><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->name }}</a></td>
               <td>{{ $project->category }}</td>
               <td>{{ $project->views }}</td>
               <td>{{ $project->images()->count() }}</td>
               <td>{{ $project->finishes()->count() }}</td>
               <td>{{ $project->materials()->count() }}</td>
               <td nowrap="nowrap" title="@if($project->created_at){{ $project->created_at }}@endif">{{ $project->created_at->toDateString() }}</td>
               <td title="@if($project->updated_at){{ $project->updated_at }}@endif">{{ $project->updated_at->toDateString() }}</td>
               <td>
                  @include('admin.projects.projects.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>

   </table>
   
@else
   {{ Config::get('settings.noRecordsFound') }}
@endif
