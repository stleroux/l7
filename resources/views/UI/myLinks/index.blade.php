@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
      My Links
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">My Links</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('UI.myLinks.index.topbar')

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               @if($userlinks->count() > 0)

                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           {{-- <th class="d-none d-lg-table-cell">#</th> --}}
                           <th>Name</th>
                           <th>Page URL</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort text-right" width="200px">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        @foreach($userlinks as $link)
                           <tr>
                              {{-- <td class="d-none d-lg-table-cell">{{ $bug->id }}</td> --}}
                              <td nowrap="nowrap">
                                 {{-- <a href="{{ route('bugs.show', $bug) }}">{{ $bug->title }}</a> --}}
                                 {{-- <a href="{{ route('bugs.show', $bug) }}" class="btn btn-xs border text-light">
                                    <i class="{{ config('icons.link') }}"></i>
                                 </a> --}}
                                 {{ $link->name }}
                              </td>
                              <td>{{ $link->page_url }}</td>
                              <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($link->created_at){{ $link->created_at }}@endif">{{ $link->created_at->toDateString() }}</td>
                              {{-- <td>{{ $link->created_at }}</td> --}}
                              <td class="d-none d-lg-table-cell" title="@if($link->updated_at){{ $link->updated_at }}@endif">{{ $link->updated_at->toDateString() }}</td>
                              {{-- <td>{{ $link->updated_at }}</td> --}}
                              <td class="text-right">
                                 @include('UI.myLinks.index.actions')
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

   @include('modals.destroy', ['modelName'=>'mylink'])
   @include('help.index', ['title'=>'My Links', 'icon'=>'', 'path'=>'UI.mylinks.index'])

@endsection
