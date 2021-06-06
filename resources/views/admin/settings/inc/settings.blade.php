<!-- SETTINGS -->

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
						@include('admin.settings.fields.settings.authorFormat')
						@include('admin.settings.fields.settings.dateFormat')
						@include('admin.settings.fields.settings.homepageBlogCount')
						@include('admin.settings.fields.settings.loginCountWarning')
						@include('admin.settings.fields.settings.noRecordsFound')
						@include('admin.settings.fields.settings.perPage')
						@include('admin.settings.fields.settings.popularCount')
						@include('admin.settings.fields.settings.viewsToBePopularCount')
						@include('admin.settings.fields.settings.formSubmissionError')
						@include('admin.settings.fields.settings.viewMore')
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
