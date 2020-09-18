@auth

	<div class="card mb-2 card-trans-4">

		<div class="card-header block_header p-2">
			<i class="{{ Config::get('buttons.archives') }}"></i>
			Blog Archives
		</div>
		
		<div class="card-body p-2">
			@if(count($postlinks) > 0)
				<ul class="list-group px-0 py-0">
					@foreach($postlinks as $plink)
						<a href="{{ route('blog.archive', ['year'=>$plink->year, 'month'=>$plink->month]) }}"
							style="text-decoration: none"
							class="list-group-item list-group-item-action p-1 card-trans-4"
						>
							<i class="{{ Config::get('buttons.archive') }}"></i>
							{{ $plink->month_name }} - {{ $plink->year }}
							<span class="badge badge-secondary badge-pill float-right">{{ $plink->post_count }}</span>
						</a>
					@endforeach
				</ul>
			@else
				{{ Config::get('settings.noRecordsFound') }}
			@endif
		</div>

	</div>

@endauth
