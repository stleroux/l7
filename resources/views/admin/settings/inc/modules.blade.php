<!-- MODULES -->

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
						@include('admin.settings.fields.modules.blog')
						@include('admin.settings.fields.modules.carvings')
						@include('admin.settings.fields.modules.darts')
						@include('admin.settings.fields.modules.projects')
						@include('admin.settings.fields.modules.recipes')
					</tbody>
    			</table>
 			</div>
 		</div>
 	</div>
</div>
