<!-- INVOICER -->

<div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header bg-primary p-2">Company</div>
		<div class="card-body p-2 m-0">
			<div class="row">
				@include('admin.settings.fields.invoicer.companyName', ['required'=>'required'])
			</div>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Address</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					@include('admin.settings.fields.invoicer.address_1', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.address_2', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.city', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.state', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.zip', ['required'=>'required'])
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Contact</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					@include('admin.settings.fields.invoicer.telephone', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.fax')
					@include('admin.settings.fields.invoicer.email', ['required'=>'required'])
					@include('admin.settings.fields.invoicer.website', ['required'=>'required'])
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Settings</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					@include('admin.settings.fields.invoicer.wsibNo')
					@include('admin.settings.fields.invoicer.wsibRate')
					@include('admin.settings.fields.invoicer.hstNo')
					@include('admin.settings.fields.invoicer.hstRate')
					@include('admin.settings.fields.invoicer.incomeTaxRate')
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary p-2">Other</div>
			<div class="card-body p-2 m-0">
				<div class="row">
					@include('admin.settings.fields.invoicer.version', ['required'=>'required'])
				</div>
			</div>
		</div>
	</div>
</div>
