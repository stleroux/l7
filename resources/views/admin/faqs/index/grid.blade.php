@if($faqs->count() > 0)

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
            <th>Question</th>
            <th>Category</th>
            <th>Published?</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($faqs as $faq)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $faq->id }}"
                     id="{{ $faq->id}}" />
                     <label for="{{ $faq->id }}"></label>
                  </div>
               </td>
               {{-- <td>{{ $faq->id }}</td> --}}
               <td><a href="{{ route('admin.faqs.show', $faq->id) }}">{{ ucfirst($faq->question) }}</a></td>
               <td>{{ $faq->category }}</td>
               <td>{{ ($faq->is_published ? 'Yes' : 'No') }}</td>
               <td class="text-right">
                  @include('admin.faqs.index.actions')
               </td>
            </tr>
         @endforeach
      </tbody>

   </table>
   
@else
   {{ config('settings.noRecordsFound') }}
@endif
