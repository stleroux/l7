@extends('layouts.admin.admin')

@include('admin.settings.index.sections.stylesheet')
@include('admin.settings.index.sections.pageHeader')
@include('admin.settings.index.sections.breadcrumb')
@include('admin.settings.index.sections.sidebar')
{{-- @include('admin.settings.index.sections.functions') --}}
@include('admin.settings.index.sections.formBegin')
@include('admin.settings.index.sections.formEnd')

@section('content')

<div class="card">
	{{-- <div class="card-header">
		<div class="card-title">Title</div>
	</div> --}}
	<div class="card-body">
		Please wait while settings are being updated...<br />
		Page will auto-refresh.
	</div>
</div>
<br />

{{-- <a href="{{ route('admin.settings.index') }}"
	id="proceed"
	style="display: none;"
	class="btn btn-sm btn-default">
   <i class="{{ config('icons.reload') }}"></i>
   Reload Settings
</a> --}}

@endsection

@section('scripts')
{{-- 	<script type="text/javascript">
  		$('#proceed').delay(3000).show(0);
	</script> --}}

	<script> setTimeout(function(){window.location='/admin/settings'}, 4000); </script> 
@endsection