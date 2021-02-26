<!-- APP SETTINGS -->

<div class="container-fluid p-0">
	<div class="row-col">
		<div class="card">
			<div class="card-body">
    			<table class="table table-sm table-striped">
        			<thead>
     					{{-- @include('admin.settings.fields.tableHeader', ['title'=>'Nothing']) --}}
     					@include('admin.settings.fields.columnHeaders')            
        			</thead>
        			<tbody>
						@include('admin.settings.fields.home.appName')
						@include('admin.settings.fields.home.appURL')
						@include('admin.settings.fields.home.siteVersionNo')
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
