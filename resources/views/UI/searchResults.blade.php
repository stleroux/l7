@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.search') }}"></i>
   Search Results
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Search Results</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

<div class="card card-trans-6">
    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

    <div class="card-body card-trans-4">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h3>{{ ucfirst($type) }}</h3>

            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="{{ $searchResult->url }}">{{ ucwords($searchResult->title) }}</a></li>
                </ul>
            @endforeach
        @endforeach

    </div>
</div>

@endsection
