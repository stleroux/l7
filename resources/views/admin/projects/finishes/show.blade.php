@extends('layouts.admin.admin')

@section('stylesheets')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.show') }}"></i>
   Show Project Finish
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.finishes.index') }}">Project Finishes</a></li>
   <li class="breadcrumb-item active">Show Project Finish</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')
   
   @include('admin.projects.finishes.show.topbar')

   <div class="card mb-3">

      {{-- <div class="card-header section_header p-2">
         <i class="fa fa-plus-square"></i>
         Show Finish
         <span class="float-right">
            <div class="btn-group">
               @include('admin.projects.finishes.buttons.help', ['size'=>'xs', 'bookmark'=>'projects'])

            </div>
         </span>
      </div> --}}

      {{-- <div class="card-body section_body p-2"> --}}

         <table class="table table-sm table-striped table-hover text-dark">
            <tr>
               <th class="w-25">ID</th>
               <td class="w-75">{{ $finish->id }}</td>
            </tr>
            <tr>
               <th>Name</th>
               <td>{{ $finish->name }}</td>
            </tr>
            <tr>
               <th>Type</th>
               <td>{{ $finish->type }}</td>
            </tr>
            <tr>
               <th>Color Name</th>
               <td>{{ $finish->color_name }}</td>
            </tr>
            <tr>
               <th>Color Code</th>
               <td>{{ $finish->color_code }}</td>
            </tr>
            <tr>
               <th>Sheen</th>
               <td>{{ $finish->sheen }}</td>
            </tr>
            <tr>
               <th>Manufacturer</th>
               <td>{{ $finish->manufacturer }}</td>
            </tr>
            <tr>
               <th>UPC Code</th>
               <td>{{ $finish->upc }}</td>
            </tr>
            <tr>
               <th>Created On</th>
               <td>{{ $finish->created_at ? $finish->created_at->format('M d, Y') : 'no data found' }}</td>
            </tr>
            <tr>
               <th>Updated On</th>
               <td>{{ $finish->updated_at ? $finish->updated_at->format('M d, Y') : 'no data found' }}</td>
            </tr>
         </table>

         {{-- <p></p> --}}

      {{-- </div> --}}



<div class="card-body section_body p-2">
   {{-- @include('admin.projects.finishes.form') --}}
</div>




   </div>
   
@endsection
