@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.movies') }}"></i>
   Trashed Movies
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.movies.index') }}">Movies</a></li>
   <li class="breadcrumb-item">Trashed Movies</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   {{-- @include('admin.movies.blocks.sidebar') --}}
   {{-- @include('admin.movies.blocks.archives') --}}
@endsection

@section('topbar')
   @include('admin.movies.trashed.topbar')
@endsection

@section('content')
   {{-- <form style="display:inline;">
      {!! csrf_field() !!} --}}

      <div class="card mb-3">

         {{-- <div class="card-header section_header p-2">
            <i class="{{ config('buttons.trashed') }}"></i>
            Trashed Movies
            <div class="float-right">
               <div class="btn-group"> --}}
                  {{-- @include('admin.movies.buttons.help', ['size'=>'xs', 'bookmark'=>'']) --}}
                  {{-- @include('admin.movies.buttons.trashAll', ['size'=>'sm']) --}}
                  {{-- @include('admin.movies.buttons.restoreAll', ['size'=>'sm']) --}}
{{--                </div>
            </div>
         </div> --}}
         
{{--          @if($movies->count())
            <div class="text-center">
               <div class="btn-group p-1">
                  <a href="{{ route('admin.movies.trashed') }}" class="{{ Request::is('admin/movies/trashed') ? "btn-secondary": "btn-primary" }} btn btn-sm">All</a>
                  @foreach($letters as $value)
                     <a href="{{ route('admin.movies.trashed', $value) }}" class="{{ Request::is('admin/movies/trashed/'.$value) ? "btn-secondary": "btn-primary" }} btn btn-sm">{{ strtoupper($value) }}</a>
                  @endforeach
               </div>
            </div>
         @endif --}}

         <div class="card-body section_body p-2">
            @if($movies->count())
               <table id="datatable" class="table table-hover table-sm searchHighlight">
                  <thead>
                     <tr>
                        <th class="no-sort" width="30px">
                           <div class="icheck-primary d-inline">
                              <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                              <label for="checkbox_all"></label>
                           </div>
                        </th>
                        {{-- Add columns for search purposes only --}}
                           {{-- <th class="d-none">English</th> --}}
                           {{-- <th class="d-none">French</th> --}}
                        {{-- Add columns for search purposes only --}}

                        <th>Title</th>
                        <th class="hidden-xs">Category</th>
                        <th class="hidden-xs hidden-sm">Views</th>
                        <th class="hidden-sm hidden-xs">Deleted On</th>
                        <th data-orderable="false"></th>
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
                           {{-- Hide columns at all levels. Only needed because Datatables only searches for columns in the table --}}
                              {{-- <td class="d-none">{{ $movie->description_eng }}</td> --}}
                              {{-- <td class="d-none">{{ $movie->description_fre }}</td> --}}
                           {{-- Hide columns at all levels. Only needed because Datatables only searches for columns in the table --}}
                           <td>
                              {{-- <a href="{{ route('admin.movies.showTrashed', $movie->id) }}" class="">{{ $movie->title }}</a> --}}
                              {{ $movie->title }}
                           </td>
                           <td>{{ $movie->category }}</td>
                           <td class="hidden-xs hidden-sm">{{ $movie->views }}</td>
                           <td data-order="{{ $movie->deleted_at }}">{{ $movie->deleted_at }}</td>
                           <td>
                              <div class="float-right">
                                 <div class="btn-group">
                                    @include('admin.movies.trashed.actions')
                                 </div>
                              </div>
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            @else
               {{ config('settings.noRecordsFound') }}
            @endif
         </div>
{{--          <div class="card-footer">
            <p>
               <strong>Note:</strong>
               <br />
               <strong>Publish Selected</strong> will set the deleted_at field to Null and the published_at field to the current date and time for all selected records.
               <br />
               <strong>Restore Selected</strong> will set the deleted_at field to Null for all selected records. (Will not change anything else.)
               <br />
               <strong>Delete Selected</strong> will <span class="text-danger">permanently delete</span> all selected records from the database.
            </p>
         </div> --}}
      </div>
   {{-- </form> --}}

   @include('modals.restore', ['modelName'=>'movie'])
   @include('modals.massRestore', ['modelName'=>'movie'])
   @include('modals.delete', ['modelName'=>'movie'])
   @include('modals.massDelete', ['modelName'=>'movie'])
   @include('admin.movies.help')
   
@endsection
