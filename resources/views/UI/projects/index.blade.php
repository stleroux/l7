@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@stop

@section('pageHeader')
   <i class="{{ Config::get('icons.projects') }}"></i>
   Projects
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Projects</li>
@endsection

@section('right_column')
   @include('UI.projects.blocks.popular')
@endsection

@section('content')

   <div class="card card-trans-0 w-100 pt-2 px-2">
      
      <div class="card-header d-none d-xl-block pt-0 pb-2 text-center">
         <div class="btn-group" role="group">
         @foreach($project->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
            @if($categoryOptionKey == 0)
               <a href="{{ route('projects.index') }}"
                  class="btn btn-sm btn-{{ request()->is('projects') ? 'default' : 'alphabet' }}">
                  All Projects
               </a>
            @else
               <a href="{{ route('projects.index', $categoryOptionKey) }}"
                  class="btn btn-sm btn-{{ request()->is('projects/'.$categoryOptionKey) ? 'default' : 'alphabet' }} p-1">
                  {{ $categoryOptionValue }}
               </a>
            @endif
         @endforeach
         </div>
      </div>

      {{-- Used on small screens only --}}
      <div class="card-header d-block d-xl-none pt-0 pb-3 text-center">
         <select name="filter" class="form-control" onchange="if (this.value) window.location.href=this.value">
            @foreach($project->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
               <option value="{{ route('projects.index', $categoryOptionKey) }}" {{ Request()->filter == $categoryOptionKey ? ' selected' : '' }}>
                  @if($categoryOptionValue == 'Select One')
                     All Projects
                  @else
                     {{ $categoryOptionValue }}
                  @endif
               </option>
            @endforeach
         </select>
      </div>
      
      <div class="card-body card-trans-2 pb-0 mb-0">

         @if(count($projects) > 0)
            <div class="row card-trans-0 p-0 m-0">

               @foreach($projects as $project)
                  <div  class="col-xl-3 pb-3">
                     <div id="card-hover" class="h-100 w-100" style="border: 2px black solid;">
                        <div class="h-100 thumbnail pt-2 text-center" {{-- style="background-image: url('/images/nav.jpg');" --}}>
                           <a href="{{ route('projects.show', $project->id) }}">
                              @if($project->images->count() > 0)
                                 <img src="/_projects/{{ $project->id }}/thumbs/{{ $project->images[0]->name }}" alt="{{ $project->name}}" {{-- class="mx-auto mw-100" --}} height="150px" width="95%" />
                              @else
                                 <img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
                              @endif
                              <h4 class="badge-dark p-1 m-1">{{ ucwords($project->name) }}</h4>
                              <div class=""><strong>Category</strong> : {{ $project->category }}</div>
                              <div class=""><strong>Views</strong> : {{ $project->views }}</div>
                              <div class=""><strong>Comments</strong> : {{ $project->comments->count() }}</div>
                              <div class="">
                                 <span>
                                    <strong>
                                    @if(count($project->images) > 0)
                                       {{ count($project->images) > 1 ? 'Images' : 'Image' }} : 
                                       {{ count($project->images) }} 
                                    @else
                                       No Images
                                    @endif
                                    </strong>
                                 </span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               @endforeach

            </div>

            {{-- <div class="row justify-content-center p-0 m-0"> --}}
                  {{-- {{ $projects->links() }} --}}
                  {{-- {{ $projects->links('UI.projects.pagination.custom') }}            
            </div> --}}

            {{-- SHOW PAGINATION --}}
               @if (strpos($_SERVER['REQUEST_URI'], "1000") === false)
                  <div class="row">
                     <div class="col ml-2 text-light">
                        Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{$projects->total()}} entries
                     </div>
                     <div class="col text-right pagination-sm p-0 m-0">
                        {{ $projects->links('UI.projects.pagination.custom') }}
                     </div>
                  </div>
               @endif

{{--             <div class="card-footer card-trans-0 border text-light px-2 py-1">
               Click a project's image to view it's details
            </div> --}}

         @else
            <div class="col-row p-0">No projects found</div>
         @endif

      </div>

   </div>

@endsection
