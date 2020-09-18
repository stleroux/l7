{{-- <div class="card-body section_body p-2"> --}}

	@if($recipes->count() > 0)
	
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
				@foreach($recipes as $recipe)
				<tr>
					<td>
                  <div class="icheck-primary d-inline">
                     <input
                     	name="entries[]"
                     	id="{{ $recipe->id}}"
                     	type="checkbox"
                     	class="record checkbox_record"
                     	value="{{ $recipe->id }}"
                     	onchange="showHide(this.checked)"
                     />
                     <label for="{{ $recipe->id }}"></label>
                  </div>
               </td>
					<td>
						<a href="{{ route('admin.recipes.show', $recipe->id) }}">
							{{ ucwords($recipe->title) }}
						</a>
					</td>
					<td>
						{{ ucwords($recipe->category->name) }}
					</td>
					<td>
						{{ $recipe->views }}
					</td>
					<td>
						{{ $recipe->favoritesCount }}
					</td>
					<td>
						@include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])
					</td>
					<td>
						@include('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'])
					</td>
					<td>
						@include('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'])
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
                  @include('admin.recipes.index.actions')
               </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
	@else
	
		{{ Config::get('settings.noRecordsFound') }}
	
	@endif

{{-- </div> --}}
