@extends('layouts.admin.admin')

{{-- @include('admin.frontend.general.sections.stylesheet') --}}
@section('stylesheet')
@endsection

{{-- @include('admin.frontend.general.sections.pageHeader') --}}
@section('pageHeader')
   <i class="{{ config('icons.') }}"></i>
   General Site Settings
@endsection

{{-- @include('admin.frontend.general.sections.breadcrumb') --}}
@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.general') }}">General</a></li> --}}
   <li class="breadcrumb-item">General</li>
@endsection

{{-- @include('admin.frontend.general.sections.sidebar') --}}
@section('sidebar')
   {{-- @include('admin.users.index.sidebar') --}}
@endsection

{{-- @include('admin.frontend.general.sections.functions') --}}
{{-- @include('admin.frontend.general.sections.formBegin') --}}
{{-- @include('admin.frontend.general.sections.formEnd') --}}

@section ('content')


{{-- {{ $greeting }} --}}

      {{-- @include('admin.frontend.general.topbar') --}}
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            @include('admin.frontend.general.tabs')
         </div>

         <div class="card-body p-2">
            <div class="tab-content" id="general-tabContent">
               @include('admin.frontend.general.homepage.index')
               {{-- @include('admin.frontend.general.notes') --}}
               {{-- @include('admin.frontend.general.image') --}}
               {{-- @include('admin.frontend.general.information') --}}
               {{-- @include('admin.frontend.general.settings') --}}
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   @include('admin.frontend.general.help')
   
@endsection
