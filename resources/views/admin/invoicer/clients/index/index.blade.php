@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer-clients') }}"></i>
   Invoicer :: Clients
	@if(strpos($_SERVER['REQUEST_URI'], 'search?selection=contact') !== false)
		&nbsp; [Filtered By Contact]
	@elseif(strpos($_SERVER['REQUEST_URI'], 'search?selection=company') !== false)
		&nbsp; [Filtered By Company]
	@endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Clients</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

@include('admin.invoicer.clients.index.topbar')

<div class="row">
	<div class="col-sm-9">
		<div class="card">
{{-- 			<div class="card-header">
				<span class="h3">Clients</span>
				@if(strpos($_SERVER['REQUEST_URI'], 'search?selection=contact') !== false)
					[Filtered By Contact]
				@elseif(strpos($_SERVER['REQUEST_URI'], 'search?selection=company') !== false)
					[Filtered By Company]
				@endif
			</div> --}}
			
			@if($clients->count() > 0)
				<table class="table table-hover table-sm">
					<thead>
						<tr>
							<th>@sortablelink('id','Client ID')</th>
							<th>@sortablelink('company_name','Company Name')</th>
							<th>@sortablelink('last_name','Contact Name')</th>
							<th>@sortablelink('email','Contact Email')</th>
							<th>Phone N<supp>o</supp></th>
                     <th>Invoices</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($clients as $client)
						<tr>
							<td>{{ $client->id }}</td>
							<td>{{ $client->company_name }}</td>
							<td>{{ $client->first_name }} {{ $client->last_name }}</td>
							<td>{{ $client->email }}</td>
							<td>{{ $client->telephone }}</td>
                     <td>{{ $client->invoices->count() }}</td>
							<td>
								<div class="float-right">
									@can('invoicer-invoice')
										<a href="{{ route('admin.invoicer.invoices.create', $client->id) }}" class="btn btn-sm btn-outline-primary">
											<i class="far fa-plus-square"></i>
											New Invoice
										</a>
									@endcan

									{{-- @can('invoicer-client') --}}
										<a href="{{ route('admin.invoicer.clients.show', $client->id) }}" class="btn btn-sm btn-outline-primary">
											<i class="fa fa-eye" aria-hidden="true"></i>
											View
										</a>
									{{-- @endcan --}}
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="card-body">
					No clients found in the system.
				</div>
			@endif

			@if($clients->count() > 0)
				<div class="card-footer">
					<div class="row">
						<div class="col-xs-6 text-left">
							Showing records {{ $clients->firstItem() }} to {{ $clients->lastItem() }} of {{ $clients->total() }}
						</div>
						<div class="col-xs-6 text-right">
							{!! $clients->appends(request()->except('page'))->render() !!}
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
	<div class="col-sm-3">
		<div class="card">
			<div class="card-header">
				Filter
			</div>
			<div class="card-body pb-0">
				<form action="{{ route('admin.invoicer.clients.search') }}" class="">
					<div class="form-group">
						<select class="form-control" name="selection">
							<option value="company">Company Name</option>
							<option value="contact">Contact Name</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="searchWord">
					</div>
					<div class="form-group text-center">
						<button type="submit" value="Search" class="btn btn-sm btn-primary">
							<i class="fa fa-binoculars" aria-hidden="true"></i>
							Filter
						</button>
						<a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
							<i class="far fa-square"></i>
							Reset
						</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				Click the Reset button to clear search parameters and display all clients
			</div>
		</div>
	</div>
</div>

@endsection
