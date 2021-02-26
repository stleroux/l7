<!-- INVOICER -->

<div class="container-fluid p-0">
	<div class="row-col">
		<div class="card">
			<div class="card-body">
    			<table class="table table-sm table-striped">
        			<thead>
     					@include('admin.settings.fields.tableHeader', ['title'=>'Company'])
     					@include('admin.settings.fields.columnHeaders')            
        			</thead>
        			<tbody>
						@include('admin.settings.fields.invoicer.companyName', ['required'=>'required'])
					</tbody>
					<thead>
						@include('admin.settings.fields.tableHeader', ['title'=>'Address'])
						@include('admin.settings.fields.columnHeaders')
					</thead>
					<tbody>
						@include('admin.settings.fields.invoicer.address_1', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.address_2', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.city', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.state', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.zip', ['required'=>'required'])
					</tbody>
					<thead>
						@include('admin.settings.fields.tableHeader', ['title'=>'Contact'])
						@include('admin.settings.fields.columnHeaders')
					</thead>
					<tbody>
						@include('admin.settings.fields.invoicer.telephone', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.fax')
						@include('admin.settings.fields.invoicer.email', ['required'=>'required'])
						@include('admin.settings.fields.invoicer.website', ['required'=>'required'])
					</tbody>
					<thead>
						@include('admin.settings.fields.tableHeader', ['title'=>'Settings'])
						@include('admin.settings.fields.columnHeaders')
					</thead>
					<tbody>
						@include('admin.settings.fields.invoicer.wsibNo')
						@include('admin.settings.fields.invoicer.wsibRate')
						@include('admin.settings.fields.invoicer.hstNo')
						@include('admin.settings.fields.invoicer.hstRate')
						@include('admin.settings.fields.invoicer.incomeTaxRate')
					</tbody>
					<thead>
						@include('admin.settings.fields.tableHeader', ['title'=>'Notifications'])
						@include('admin.settings.fields.columnHeaders')
					</thead>
					<tbody>
						@include('admin.settings.fields.invoicer.usersToNotify', ['users'=>$users])
					</tbody>
					<thead>
						@include('admin.settings.fields.tableHeader', ['title'=>'Other'])
						@include('admin.settings.fields.columnHeaders')
					</thead>
					<tbody>
						@include('admin.settings.fields.invoicer.version', ['required'=>'required'])
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
