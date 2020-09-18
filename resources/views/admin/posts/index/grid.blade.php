{{-- <div class="card-body section_body p-2"> --}}

	@if($posts->count() > 0)
	
		{{-- @include('recipes.alphabet', ['model'=>'recipe', 'page'=>'published']) --}}
	
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
					<th>Favorited</th>
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
                     	name="entries[]"
                     	id="{{ $post->id}}"
                     	type="checkbox"
                     	class="record checkbox_record"
                     	value="{{ $post->id }}"
                     	onchange="showHide(this.checked)"
                     />
                     <label for="{{ $post->id }}"></label>
                  </div>
               </td>
					<td>
						<a href="{{ route('admin.posts.show', $post->id) }}">
							{{ ucwords($post->title) }}
						</a>
					</td>
					<td>
						{{ ucwords($post->category->name) }}
					</td>
					<td>
						{{ $post->views }}
					</td>
					<td>
						{{ $post->favoritesCount }}
					</td>
					<td>
						@include('common.authorFormat', ['model'=>$post, 'field'=>'user'])
					</td>
					<td>
						@include('common.dateFormat', ['model'=>$post, 'field'=>'created_at'])
					</td>
					<td>
						@include('common.dateFormat', ['model'=>$post, 'field'=>'published_at'])
					</td>
					{{-- <td class="text-right">
						<div class="btn-group">
							@include('admin.recipes.buttons.view', ['size'=>'sm'])
							@include('admin.recipes.buttons.publish', ['size'=>'sm'])
							@include('admin.recipes.buttons.edit', ['size'=>'sm'])
							@include('admin.recipes.buttons.trash', ['size'=>'sm'])
						</div>
					</td> --}}
					<td class="text-right">
                  @include('admin.posts.index.actions')
               </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
	@else
	
		{{ Config::get('settings.noRecordsFound') }}
	
	@endif

{{-- </div> --}}
