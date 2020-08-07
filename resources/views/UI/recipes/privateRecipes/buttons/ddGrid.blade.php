<div class="btn-group">
	<a class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
		Select A Category
		<span class="sr-only">Toggle Dropdown</span>
	</a>
	<div class="dropdown-menu dropdown-menu-right">
	@foreach ($categories as $category)
			<a class="dropdown-item p-0 pl-2 text-warning" href="{{ route('recipes.privateRecipesGrid', $category->name) }}">
				{{  deliciousCamelcase(ucfirst($category->name)) }}
			</a>
			@foreach ($category->children as $children)
				<a class="dropdown-item p-0 pl-2" href="{!! route('recipes.privateRecipesGrid', $children->name) !!}">
					&nbsp;&nbsp;&nbsp;- {{  deliciousCamelcase(ucfirst($children->name)) }}
				</a>
			@endforeach
		@endforeach
	</div>
</div>
