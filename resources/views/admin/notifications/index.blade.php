@extends('layouts.admin.admin-10-2')

@include('admin.notifications.index.sections.stylesheet')
@include('admin.notifications.index.sections.pageHeader')
@include('admin.notifications.index.sections.breadcrumb')
@include('admin.notifications.index.sections.sidebar')
@include('admin.notifications.index.sections.blocks')
@include('admin.notifications.index.sections.formBegin')
@include('admin.notifications.index.sections.formEnd')

@section('content')

	<div class="card card-primary">

		<div class="card-header p-2">Notifications</div>

		<div class="card-body">

			<table id="datatable" class="table table-sm table-striped">

				<thead>
					<tr>
						<th>Description</th>
						<th>Date</th>
						<th data-orderable="false" class="text-center">Actions</th>
					</tr>
				</thead>

				<tbody>

					@foreach($notifications as $notification)
						<tr>
							@include('admin.notifications.type.invoiceCreated')
							@include('admin.notifications.type.paymentAdd')
							@include('admin.notifications.type.paymentRemove')
							@include('admin.notifications.type.discountAdd')
							@include('admin.notifications.type.discountRemove')
							@include('admin.notifications.type.depositAdd')
							@include('admin.notifications.type.depositRemove')
							@include('admin.notifications.type.billableAdd')
							@include('admin.notifications.type.billableUpdate')
							@include('admin.notifications.type.billableRemove')
						</tr>
					@endforeach

				</tbody>
				
			</table>

		</div>

	</div>

@include('admin.notifications.help')

@endsection
