<!-- SETTINGS -->

<div class="row">
	@include('admin.settings.fields.settings.authorFormat', ['required'=>'required'])
	@include('admin.settings.fields.settings.dateFormat', ['required'=>'required'])
	@include('admin.settings.fields.settings.homepageBlogCount', ['required'=>'required'])
	@include('admin.settings.fields.settings.loginCountWarning', ['required'=>'required'])
	@include('admin.settings.fields.settings.noRecordsFound', ['required'=>'required'])
	@include('admin.settings.fields.settings.perPage', ['required'=>'required'])
	@include('admin.settings.fields.settings.popularCount', ['required'=>'required'])
</div>
