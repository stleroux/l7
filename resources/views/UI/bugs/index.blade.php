@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.bugs') }}"></i>
   Bug Reports
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Bug Reports</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('UI.bugs.index.topbar')

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               @if($bugs->count() > 0)


                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           {{-- <th class="d-none d-lg-table-cell">#</th> --}}
                           <th>Title</th>
                           <th>Status</th>
                           <th>Likes</th>
                           <th>Owner</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort text-right">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        @foreach($bugs as $bug)
                           <tr>
                              {{-- <td class="d-none d-lg-table-cell">{{ $bug->id }}</td> --}}
                              <td nowrap="nowrap">
                                 {{-- <a href="{{ route('bugs.show', $bug) }}">{{ $bug->title }}</a> --}}
                                 {{-- <a href="{{ route('bugs.show', $bug) }}" class="btn btn-xs border text-light">
                                    <i class="{{ config('icons.link') }}"></i>
                                 </a> --}}
                                 {{ $bug->title }}
                              </td>
                              <td>{{ $bug->status }}</td>
                              <td>{{ $bug->likes()->count() }}</td>
                              <td>{{ $bug->user->username }}</td>
                              <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($bug->created_at){{ $bug->created_at }}@endif">{{ $bug->created_at->toDateString() }}</td>
                              <td class="d-none d-lg-table-cell" title="@if($bug->updated_at){{ $bug->updated_at }}@endif">{{ $bug->updated_at->toDateString() }}</td>
                              <td class="text-right">
                                 @include('UI.bugs.index.actions')
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>

               @else

                  {{ config('settings.noRecordsFound') }}
               
               @endif

            </div>

         </div>

      </div>

   </div>

   @include('modals.destroy', ['modelName'=>'bug'])
   @include('help.index', ['title'=>'Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.index'])

@endsection
