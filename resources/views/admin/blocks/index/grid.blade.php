@if($blocks->count() > 0)

   <table class="table table-hover table-sm" id="datatable">
      
      <thead>
         <tr>
            {{-- <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            <th class="d-none d-lg-table-cell">#</th> --}}
            <th>Title</th>
            <th class="d-none d-lg-table-cell">Page</th>
            <th class="d-none d-lg-table-cell">Name</th>
            <th class="d-none d-lg-table-cell">Created</th>
            <th class="d-none d-lg-table-cell">Updated</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($blocks as $block)
            <tr>
               {{-- <td>
                  <div class="icheck-primary d-inline">
                     <input
                        type="checkbox"
                        class="record checkbox_record"
                        name="entries[]"
                        onchange="showHide(this.checked)"
                        value="{{ $block->id }}"
                        id="{{ $block->id}}" />
                     <label for="{{ $block->id }}"></label>
                  </div>
               </td>
               <td class="d-none d-lg-table-cell">{{ $block->id }}</td> --}}
               <td nowrap="nowrap"><a href="{{ route('admin.blocks.show', $block) }}">{{ $block->title }}</a></td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap">{{ ucwords($block->page) }}</td>
               <td class="d-none d-lg-table-cell" nowrap="nowrap">{{ ucwords($block->name) }}</td>

               {{-- <td nowrap="nowrap"> --}}
{{--                   <form action="{{ route('admin.frontends.updateStatus', $block) }}" method="POST">
                     @csrf
                     @method("PUT")

                     <select
                        name="status"
                        id="status"
                        class="form-control form-control-sm @error('status') is-invalid @enderror"
                        onchange="this.form.submit()"
                     >
                        @foreach($block->statusOptions() as $statusOptionKey => $statusOptionValue)
                           <option value="{{$statusOptionKey}}" {{ $block->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
                        @endforeach
                     </select>
                  </form> --}}
               {{-- </td> --}}

               <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($block->created_at){{ $block->created_at }}@endif">
                  {{-- {{ $block->created_at->toDateString() }} --}}
                  {{ $block->created_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="d-none d-lg-table-cell" title="@if($block->updated_at){{ $block->updated_at }}@endif">
                  {{ $block->updated_at->format(config('settings.dateFormat')) }}
               </td>
               <td class="text-right">
                  @include('admin.blocks.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>
      
   </table>

@else
   {{ config('settings.noRecordsFound') }}
@endif
