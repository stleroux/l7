@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.private') }}"></i> --}}
   <i class="fas fa-fw fa-address-card" aria-hidden="true"></i>
   Recipe Archives for 
      @if ($month == 1) January 
      @elseif ($month == 2) February 
      @elseif ($month == 3) March 
      @elseif ($month == 4) April 
      @elseif ($month == 5) May 
      @elseif ($month == 6) June 
      @elseif ($month == 7) July 
      @elseif ($month == 8) August 
      @elseif ($month == 9) September 
      @elseif ($month == 10) October 
      @elseif ($month == 11) November 
      @elseif ($month == 12) December 
      @endif
      {{ $year }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('recipes.indexGrid', 'all') }}">Recipes</a></li>
   <li class="breadcrumb-item">Archived Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('content')

   <div class="card card-trans-2 mb-3">
      {{-- <div class="card-header section_header p-2">
         <i class="fas fa-address-card" aria-hidden="true"></i>
         Recipe Archives for 
         @if ($month == 1) January 
         @elseif ($month == 2) February 
         @elseif ($month == 3) March 
         @elseif ($month == 4) April 
         @elseif ($month == 5) May 
         @elseif ($month == 6) June 
         @elseif ($month == 7) July 
         @elseif ($month == 8) August 
         @elseif ($month == 9) September 
         @elseif ($month == 10) October 
         @elseif ($month == 11) November 
         @elseif ($month == 12) December 
         @endif
         {{ $year }}
         <span class="float-right"> --}}
            {{-- @include('recipes.addins.links.back', ['size'=>'xs']) --}}
         {{-- </span>
      </div> --}}
      <div class="card-body p-2 card-trans-2 text-light">
         <table id="datatable" class="table table-hover table-sm">
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Author</th>
                  <th>Create Date</th>
                  <th>Publish Date</th>
                  <th class="no-sort"></th>
               </tr>
            </thead>
            <tbody>
               @foreach ($archives as $archive)
                  <tr>
                     <td>{{ $archive->title }}</td>
                     <td>{{ ucwords($archive->category->name) }}</td>
                     <td>{{ $archive->views }}</td>
                     <td>
                        @include('common.authorFormat', ['model'=>$archive, 'field'=>'user'])
                     </td>
                     <td>@include('common.dateFormat', ['model'=>$archive, 'field'=>'created_at'])</td>
                     <td>@include('common.dateFormat', ['model'=>$archive, 'field'=>'published_at'])</td>
                     <td class="text-right">
                        <a href="{{ route('recipes.show', $archive->id) }}" class="btn btn-sm btn-primary">
                           <i class="far fa-eye"></i>
                        </a>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>

@endsection
