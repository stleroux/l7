@if($posts->count() > 0)
	{{-- @include('posts.alphabet', ['model'=>'recipe', 'page'=>'trashed']) --}}
	<table id="datatable" class="table table-sm table-hover">
	   <thead>
	      <tr>
	         {{-- <th><input type="checkbox" id="selectall" class="checked" /></th> --}}
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
	         <th>Trashed On</th>
	         <th data-orderable="false"></th>
	      </tr>
	   </thead>
	   <tbody>
	      @foreach($posts as $post)
	      <tr>
	         {{-- <td><input type="checkbox" onClick="checkbox_is_checked()" name="checked[]" value="{{$post->id}}" class="check-all"></td> --}}
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
	         <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'user'])</td>
	         <td>@include('common.dateFormat', ['model'=>$post, 'field'=>'created_at'])</td>
	         <td>@include('common.dateFormat', ['model'=>$post, 'field'=>'published_at'])</td>
	         <td>@include('common.dateFormat', ['model'=>$post, 'field'=>'deleted_at'])</td>
	         <td class="text-right">
	         	{{-- <div class="btn-group">
		            @include('admin.posts.buttons.restore', ['size'=>'sm'])
		            @include('admin.posts.buttons.delete', ['size'=>'sm'])
		         </div> --}}
		         @include('admin.posts.pages.trashed.actions')
	         </td>
	      </tr>
	      @endforeach
	   </tbody>
	</table>

@else

	{{ config('settings.noRecordsFound') }}

@endif
