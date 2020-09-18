@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
	Blog Search Results
	{{-- @include('blocks.main_menu') --}}
@endsection

@section('right_column')
	@include('UI.blog.blocks.search')
   @include('UI.blog.blocks.popular')
   @include('UI.blog.blocks.archives')
@endsection

@section ('content')


	@include('UI.blog.search.topbar')

	<div class="card mb-2 card-trans-4">
		
{{-- 		<div class="card-header section_header p-2">
			<i class="fas fa-blog"></i>
			Blog Search Results
			<span class="float-right">
				<!-- Only show the Search Results button if coming from the search results page -->
				@if (false !== stripos($_SERVER['HTTP_REFERER'], "/blog/search"))
					<a href="{{ URL::previous() }}" class="btn btn-sm btn-primary px-1 py-0">
						<i class="fa fa-arrow-left"></i> Search Results
					</a>
				@endif
				@if (true !== stripos($_SERVER['HTTP_REFERER'], "/search/posts"))
					<a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary text-light px-1 py-0">
						<i class="fas fa-blog"></i> Blog
					</a>
				@endif
			</span>
		</div> --}}
		
		<div class="card-body p-2">
			@if (count($posts) > 0)
				<table class="table table-hover table-sm">
						<thead>
							<th>Title</th>
							{{-- <th>Body</th> --}}
							<th>Created On</th>
							<th>Author</th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<td>{{ $post->title }}</td>
									{{-- <td>{!! substr($post->body, 0, 75) !!} {{ strlen($post->body) > 75 ? " ..." : "" }}</td> --}}
									<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
									<td>{{ $post->user->username }}</td>
									<td class="text-right">
										@include('UI.blog.buttons.show', ['size'=>'sm'])
									</td>
								</tr>
							@endforeach
						</tbody>
				</table>
				<!-- Display pagination links -->
				<div class="text-center">{!! $posts->render() !!}</div>
			@else
				{{ Config::get('settings.noRecordsFound') }}
			@endif
		</div>
	</div>
@endsection
