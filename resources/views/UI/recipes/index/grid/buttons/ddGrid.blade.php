<div class="btn-group" style="background-color: #800000">
	<a class="btn btn-sm text-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
		Select A Category
		<span class="sr-only">Toggle Dropdown</span>
	</a>
	<div class="dropdown-menu dropdown-menu-right" style="background-color: #800000">
		@foreach ($categories as $category)
			<a class="dropdown-item p-0 pl-2 text-light card-trans-0" href="{{ route('recipes.indexGrid', $category->name) }}">
				{{  deliciousCamelcase(ucfirst($category->name)) }}
			</a>
			@foreach ($category->children as $children)
				<a class="dropdown-item p-0 pl-2 card-trans-6 text-black" href="{!! route('recipes.indexGrid', $children->name) !!}">
					&nbsp;&nbsp;&nbsp;- {{  deliciousCamelcase(ucfirst($children->name)) }}
				</a>
			@endforeach
		@endforeach
	</div>
</div>
