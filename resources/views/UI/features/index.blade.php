@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
      My Requested Features
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Requested Features</li>
@endsection

@section('right_column')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   @include('UI.features.index.topbar')

   <div class="row">

      <div class="col">

         <div class="card card-trans-4">

            <div class="card-body">

               @if($features->count() > 0)

                  <table class="table table-hover table-sm text-light" id="datatable">
                     
                     <thead>
                        <tr>
                           <th class="d-none d-lg-table-cell">#</th>
                           <th>Title</th>
                           <th>Status</th>
                           <th class="d-none d-lg-table-cell">Created</th>
                           <th class="d-none d-lg-table-cell">Updated</th>
                           <th class="no-sort" width="30px">Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        @foreach($features as $feature)
                           <tr>
                              <td class="d-none d-lg-table-cell">{{ $feature->id }}</td>
                              <td nowrap="nowrap">
                                 {{-- <a href="{{ route('features.show', $feature) }}">{{ $feature->title }}</a> --}}
                                 <a href="{{ route('features.show', $feature) }}" class="btn btn-xs border text-light">
                                    <i class="{{ Config::get('icons.link') }}"></i>
                                 </a>
                                 {{ $feature->title }}
                              </td>
                              <td>{{ $feature->status }}</td>
                              <td class="d-none d-lg-table-cell" nowrap="nowrap" title="@if($feature->created_at){{ $feature->created_at }}@endif">{{ $feature->created_at->toDateString() }}</td>
                              <td class="d-none d-lg-table-cell" title="@if($feature->updated_at){{ $feature->updated_at }}@endif">{{ $feature->updated_at->toDateString() }}</td>
                              <td>
                                 @include('UI.features.index.actions')
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>

               @else

                  {{ Config::get('settings.noRecordsFound') }}
               
               @endif

            </div>

         </div>

      </div>

   </div>

@include('modals.destroy', ['modelName'=>'feature'])
@include('UI.features.help')

@endsection
