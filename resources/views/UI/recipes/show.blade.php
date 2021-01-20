@extends('layouts.UI.app-10-2')

@section ('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
	<i class="{{ config('icons.recipes') }}"></i>
	Recipes :: {{ $recipe->title }}
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item">
      <a href="{{ route('recipes.indexGrid', 'all') }}" class="">Recipes</a>
   </li>
	<li class="breadcrumb-item active">{{ $recipe->title }}</li>
@endsection

@section('rightColumn')
	@include('UI.recipes.blocks.sidebar')
	@include('UI.recipes.blocks.popular')
	@include('UI.recipes.blocks.archives')
	@include('UI.recipes.show.leave_comment')
@endsection

@section ('content')

	<div class="row pb-2">
		<div class="col">
			<div class="text-center">
				@if($byCatName)
					@include('UI.recipes.buttons.previous', ['size'=>'sm', 'btn_label'=>'Previous', $previous, $byCatName])
					@include('UI.recipes.buttons.next', ['size'=>'sm', 'btn_label'=>'Next', $next, $byCatName])
				@else
					@include('UI.recipes.buttons.previousAll', ['size'=>'sm', 'btn_label'=>'Previous', $previous])
					@include('UI.recipes.buttons.nextAll', ['size'=>'sm', 'btn_label'=>'Next', $next])
				@endif
			</div>
		</div>
		<div class="col">
			<div class="text-right">
				<div class="btn-group">
					{{-- @include('UI.recipes.buttons.back', ['size'=>'sm', 'btn_label'=>'Back']) --}}
		<a href="{{ route('recipes.indexGrid') }}"
         class="btn btn-sm btn-maroon">
         <i class="{{ config('icons.back') }}"></i>
         Recipes
      </a>

      @if (url()->previous() == request()->root() . '/UI/search')
         <a href="#" class="btn btn-sm btn-maroon" onclick="history.back()">Search Results</a>
      @endif
					@auth
						@include('UI.recipes.buttons.print', ['size'=>'sm', 'btn_label'=>'Print'])
						@include('UI.recipes.buttons.printPDF', ['size'=>'sm', 'btn_label'=>'Print PDF'])
						@include('UI.recipes.buttons.favorite', ['size'=>'sm', 'btn_label'=>'Favorite'])
						{{-- @include('UI.recipes.show.buttons.privatize', ['size'=>'sm', 'btn_label'=>'']) --}}
					@endauth
				</div>
			</div>
		</div>
	</div>

	{{-- <form style="display:inline;"> --}}
		<div class="card card-trans-2 mb-3">
{{-- 			<div class="card-header section_header p-2">
			</div> --}}

			<div class="card-body p-2">
				<div class="row">
					@include('UI.recipes.show.ingredients')
					@include('UI.recipes.show.image')
				</div>

				@include('common.view_more')

				@auth
					<div class="row">
						@include('UI.recipes.show.methodology')
					</div>

					<div class="row">
						@include('UI.recipes.show.category')
						@include('UI.recipes.show.servings')
						@include('UI.recipes.show.prep_time')
						@include('UI.recipes.show.cook_time')
						{{-- @include('UI.recipes.show.personal') --}}
						@include('UI.recipes.show.views')
						@include('UI.recipes.show.source')
						@include('UI.recipes.show.publishDate')
						@include('UI.recipes.show.author')
					</div>

					<div class="row">
						@include('UI.recipes.show.public_notes')
						@include('UI.recipes.show.private_notes')
					</div>

					<div class="row">
						{{-- @include('UI.recipes.show.information') --}}
					</div>
				@endauth

				<div class="row">
					<div class="col">
						@include('UI.recipes.show.comments', ['model'=>$recipe])
					</div>
				</div>

			</div>
		</div>
	{{-- </form> --}}

@endsection
