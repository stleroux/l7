@if($posts->count() > 0)
      {{-- @include('recipes.alphabet', ['model'=>'recipe', 'page'=>'newRecipes']) --}}
      <table id="datatable" class="table table-sm table-hover">
         <thead>
            <tr>
                <th class="no-sort" width="30px">
                  <div class="icheck-primary d-inline">
                     <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                     <label for="checkbox_all"></label>
                  </div>
               </th>
               <th>Name</th>
               <th>Category</th>
               <th>Views</th>
               <th>Author</th>
               <th>Created On</th>
               <th>Publish(ed) On</th>
               <th data-orderable="false"></th>
            </tr>
         </thead>
         <tbody>
            @foreach($posts as $post)
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="{{ $post->id }}"
                     id="{{ $post->id}}" />
                     <label for="{{ $post->id }}"></label>
                  </div>
               </td>
               <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ ucwords($post->title) }}</a></td>
               <td>{{ ucwords($post->category->name) }}</td>
               <td>{{ $post->views }}</td>
               <td>@include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])</td>
               <td>@include('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'])</td>
               <td>@include('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'])</td>
               <td class="text-right">
                  {{-- <div class="btn-group">
                     @include('admin.recipes.buttons.view', ['size'=>'sm'])
                     @include('admin.recipes.buttons.edit', ['size'=>'sm'])
                     @include('admin.recipes.buttons.trash', ['size'=>'sm'])
                  </div> --}}
                  @include('admin.posts.pages.new.actions')
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
@else
   {{ config('settings.noRecordsFound') }}
@endif