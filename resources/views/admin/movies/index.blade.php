@extends('layouts.admin.admin')

@section('stylesheet')
   <style>
      .table-mini th,
      .table-mini td {
         padding: 0rem;
      }
   </style>
@endsection

@section('pageHeader')
   <i class="{{ config('icons.movies') }}"></i>
   Movies
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Movies</li>
@endsection

@section('topbar')
   @include('admin.movies.index.topbar')
@endsection

@section('rightSidebar')
@endsection

@section('functions')
   @include('admin.movies.blocks.search')
   {{-- @include('admin.movies.blocks.popular') --}}
   {{-- @include('admin.movies.blocks.archives') --}}
@endsection



@section('content')
   @livewire('movies-table', ['perPage'=>config('settings.perPage')])
@endsection







@section('content1')
{{-- <form style="display:inline;">
   {!! csrf_field() !!} --}}

   <!-- ALPHABET -->
   <div class="text-center">
      <div class="btn-group p-1">
         <a href="{{ route('admin.movies.index') }}" class="{{ Request::is('admin/movies') ? "btn-secondary": "btn-primary" }} btn btn-sm">All</a>
         @foreach($letters as $value)
            <a href="{{ route('admin.movies.index', $value) }}" class="{{ Request::is('admin/movies/'.$value) ? "btn-secondary": "btn-primary" }} btn btn-sm">{{ strtoupper($value) }}</a>
         @endforeach
      </div>
   </div>

   <div class="card mb-3">
      
      <!--CARD BODY-->
      <div class="card-body section_body p-2">
         @if($movies->count() > 0)
            <table id="" class="table table-hover table-mini">
               <thead>
                  <tr>
                     <th class="no-sort" width="30px">
                        <div class="icheck-primary d-inline">
                           <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                           <label for="checkbox_all"></label>
                        </div>
                     </th>
                     <th>@sortablelink('title', 'Title')</th>
                     <th>@sortablelink('category', 'Genre')</th>
                     <th>@sortablelink('running_time', 'Runtime')</th>
                     <th>@sortablelink('views', 'Views')</th>
                     <th>@sortablelink('col_no', "Col No")</th>
                     <th>IMDB N<sup>o</sup></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($movies as $movie)
                     <tr>
                        <td>
                           <div class="icheck-primary d-inline">
                              <input
                                 name="entries[]"
                                 id="{{ $movie->id}}"
                                 type="checkbox"
                                 class="record checkbox_record"
                                 value="{{ $movie->id }}"
                                 onchange="showHide(this.checked)"
                              />
                              <label for="{{ $movie->id }}"></label>
                           </div>
                        </td>
                        <td><a href="{{ route('admin.movies.show', $movie->id) }}">{{ $movie->title }}</a></td>
                        <td>{{ $movie->category }}</td>
                        <td>{{ $movie->running_time }}</td>
                        <td>{{ $movie->views }}</td>
                        <td>{{ $movie->col_no }}</td>
                        <td>
                           @if($movie->imdb_no)
                              <a href="https://www.imdb.com/title/{{ $movie->imdb_no }}" target="_blank">{{ $movie->imdb_no }}</a>
                           @endif
                        </td>
                        <td>
                           <div class="float-right">
                              <div class="btn-group">
                                 <a href="{{ route('admin.movies.edit', $movie) }}"
                                    title="Edit Movie">
                                    <i class="{{ config('icons.edit') }}"></i>
                                 </a>
                                 <a type="button"
                                    class="resetViews-model"
                                    data-toggle="modal"
                                    data-target="#resetViewsModal"
                                    data-id="{{ $movie->id }}"
                                    data-url="{{ url('admin/movies/resetViews', $movie) }}"
                                    title="Reset Views Count"
                                    >
                                    <i class="{{ config('icons.resetViews') }} text-secondary"></i>
                                 </a>
                                 @can('movie-delete')
                                    <a type="button"
                                       class="destroy-model"
                                       data-toggle="modal"
                                       data-target="#destroyModal"
                                       data-id="{{ $movie->id }}"
                                       data-url="{{ url('admin/movies', $movie) }}"
                                       title="Delete Movie"
                                       >
                                       <i class="{{ config('icons.trash') }} text-danger pl-1"></i>
                                    </a>
                                 @endcan
                              </div>
                           </div>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
            {{-- {{ $movies->links() }} --}}
         @else
            {{ config('settings.noRecordsFound') }}
         @endif
      </div>

   </div>

   {{-- <div class="row border">
      <div class="col-xl-4 border">
         
      </div>
      <div class="col-xl-8 border">
         {!! $movies->appends(\Request::except('page'))->render() !!}         
      </div>
   </div> --}}

            {{-- SHOW PAGINATION --}}
            <div class="row">
               <div class="col ml-2">
                  Showing {{ $movies->firstItem() }} to {{ $movies->lastItem() }} of {{$movies->total()}} entries
               </div>
               <div class="col text-right p-0 m-0">
                  {{ $movies->links('admin.movies.pagination.custom') }}
               </div>
            </div>


   @include('modals.destroy', ['modelName'=>'movie'])
   @include('modals.massDestroy', ['modelName'=>'movie'])
   @include('modals.resetViews', ['modelName'=>'movie'])
   @include('modals.massResetViews', ['modelName'=>'movie'])
   @include('admin.movies.help')

@endsection
