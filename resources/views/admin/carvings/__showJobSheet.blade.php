@extends('layouts.admin.none')

@section('content')
	{{-- @php
		return File::get(public_path() . '\_carvings\\'.$carving->id.'\\'.$carving->jobSheet);
	@endphp --}}

	@php
		include html_entity_decode(public_path() . '/_carvings/'.$carving->id.'/'.$carving->jobSheet);
	@endphp
	@include('common.audits')
@endsection

{{-- {!!html_entity_decode($text)!!} --}}