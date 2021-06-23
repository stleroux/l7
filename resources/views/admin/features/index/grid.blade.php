@if($features->count() > 0)

   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            {{-- <th class="d-none d-lg-table-cell">#</th> --}}
            <th>Title</th>
            <th class="d-none d-lg-table-cell">Creator</th>
            <th class="d-none d-lg-table-cell">Status</th>
            <th class="d-none d-lg-table-cell">Views</th>
            <th class="d-none d-lg-table-cell">Likes</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($features as $feature)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $feature->id }}"
                        id="{{ $feature->id}}" />
                     <label for="{{ $feature->id }}"></label>
                  </div>
               </td>
               {{-- <td class="d-none d-lg-table-cell">{{ $feature->id }}</td> --}}
               <td nowrap="nowrap"><a href="{{ route('admin.features.show', $feature) }}">{{ $feature->title }}</a></td>
               {{-- <td nowrap="nowrap">{{ $feature->likes()->count() }}</td> --}}
               <td nowrap="nowrap">{{ $feature->user->username }}</td>
               
               <td nowrap="nowrap">
                  <form action="{{ route('admin.features.updateStatus', $feature) }}" method="POST">
                     @csrf
                     @method("PUT")

                     <select
                        name="status"
                        id="status"
                        class="form-control form-control-sm @error('status') is-invalid @enderror"
                        onchange="this.form.submit()"
                     >
                        @foreach($feature->statusOptions() as $statusOptionKey => $statusOptionValue)
                           <option value="{{$statusOptionKey}}" {{ $feature->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
                        @endforeach
                     </select>
                  </form>
               </td>
               <td>{{ views($feature)->count() }}</td>
               <td>{{ $feature->likes()->count() }}</td>

               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($feature->created_at){{ $feature->created_at }}@endif">
                  {{ $feature->created_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="d-none d-lg-table-cell" title="@if($feature->updated_at){{ $feature->updated_at }}@endif">
                  {{ $feature->updated_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="text-right">
                  @include('admin.features.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif
