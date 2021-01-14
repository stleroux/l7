@extends('layouts.admin.admin-10-2')

@include('admin.materials.show.sections.stylesheet')
@include('admin.materials.show.sections.pageHeader')
@include('admin.materials.show.sections.breadcrumb')
@include('admin.materials.show.sections.sidebar')
@include('admin.materials.show.sections.functions')
@include('admin.materials.show.sections.formBegin')
@include('admin.materials.show.sections.formEnd')

@section('content')

   {{-- @include('admin.materials.show.topbar') --}}

   <div class="card mb-3">

      {{-- <div class="card-header section_header p-2">
         <i class="fa fa-plus-square"></i>
         Show Material
         <span class="float-right">
            <div class="btn-group">
               @include('admin.materials.buttons.help', ['size'=>'xs', 'bookmark'=>'materials'])
               @include('admin.materials.buttons.back', ['size'=>'xs'])
            </div>
         </span>
      </div>

      <div class="card-body section_body p-2"> --}}

         <table class="table table-sm table-striped table-hover text-dark">
            <tbody>
               <tr>
                  <th>ID</th>
                  <td>{{ $material->id }}</td>
               </tr>
               <tr>
                  <th>Name</th>
                  <td>{{ $material->name }}</td>
               </tr>
               <tr>
                  <th>Type</th>
                  <td>{{ $material->type }}</td>
               </tr>
               <tr>
                  <th>Manufacturer</th>
                  <td>{{ $material->manufacturer }}</td>
               </tr>
               <tr>
                  <th>UPC Code</th>
                  <td>{{ $material->upc }}</td>
               </tr>
               <tr>
                  <th>Created On</th>
                  <td>{{ $material->created_at }}</td>
               </tr>
               <tr>
                  <th>Updated On</th>
                  <td>{{ $material->updated_at }}</td>
               </tr>
            </tbody>
         </table>

         {{-- @include('admin.materials.form') --}}

      </div>

   
   
@endsection
