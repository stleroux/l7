@if($offerings->count() > 0)

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
            {{-- <th>#</th> --}}
            <th>Name</th>
            <th>Category</th>
            {{-- <th>Published?</th> --}}
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($offerings as $offering)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $offering->id }}"
                     id="{{ $offering->id}}" />
                     <label for="{{ $offering->id }}"></label>
                  </div>
               </td>
               {{-- <td>{{ $offering->id }}</td> --}}
               <td><a href="{{ route('admin.offerings.show', $offering->id) }}">{{ ucwords($offering->name) }}</a></td>
               
               <td>
                  {{-- {{ ucwords($offering->category) }} --}}
                  {{ ucwords(\App\Models\Offering::where(['id' => $offering->category])->pluck('name')->first()) }}
               </td>

               {{-- <td>{{ ($offering->is_published ? 'Yes' : 'No') }}</td> --}}
               <td class="text-right">
                  @include('admin.offerings.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>

   </table>
   
@else
   {{ config('settings.noRecordsFound') }}
@endif
