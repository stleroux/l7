@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@stop

@section('pageHeader')
   <i class="{{ config('icons.projects') }}"></i>
   Projects
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Projects</li>
@endsection

@section('rightColumn')
   @include('UI.projects.blocks.popular')
   @include('UI.projects.blocks.faqs')
@endsection

@section('notice')
   @include('UI.projects.index.notice')
@endsection

@section('topbar')
   @include('UI.projects.index.topbar')
@endsection

@section('content')

   {{-- <div class="card card-trans-0 w-100 pt-2 px-2"> --}}
   @if(count($projects) > 0)
      
      <div class="card card-trans-2 mb-3">
      
         <div class="card-body card-trans-2 pb-0 mb-0">

            <div class="row card-trans-0 p-0 m-0 mb-0">

               @foreach($projects as $project)
                  <div  class="col-xl-3 pb-2">
                     <div id="card-hover" class="h-100 w-100" style="border: 2px black solid;">

                        <div class="position-relative p-0">
                           
                           @if($project->created_at > \Carbon\Carbon::now()->subMonth())
                              <div class="ribbon-wrapper">
                                 <div class="ribbon bg-lime m-0">New</div>
                              </div>
                           @endif

                           <div class="h-100 thumbnail pt-2 text-center" {{-- style="background-image: url('/images/nav.jpg');" --}}>
                              <a href="{{ route('projects.show', $project->id) }}">
                                 @if($project->images->count() > 0)
                                    <img src="/_projects/{{ $project->id }}/thumbs/{{ $project->images[0]->name }}" alt="{{ $project->name}}" {{-- class="mx-auto mw-100" --}} height="150px" width="95%" />
                                 @else
                                    <img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
                                 @endif
                                 <h4 class="badge-dark p-1 m-1">{{ ucwords($project->name) }}</h4>
                                 {{-- <div class=""><strong>Category</strong> : {{ $project->category }}</div>
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
                                 </div> --}}
                                 <div class="row">
                                    <div class="col">
                                       <div class="">
                                          <strong>Category</strong>
                                       </div>
                                       <div>
                                          {{ $project->category }}
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="">
                                          <strong>Views</strong>
                                       </div>
                                       <div>
                                          {{ $project->views }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col"><strong>Comments</strong> <br /> {{ $project->comments->count() }}</div>
                                    <div class="col">
                                       <span>
                                          @if(count($project->images) > 0)
                                             <div class="">
                                                <strong>
                                                   {{ count($project->images) > 1 ? 'Images' : 'Image' }}
                                                </strong>
                                             </div>
                                             <div>
                                                {{ count($project->images) }}
                                             </div>
                                          @else
                                             <div>
                                                <strong>
                                                   Images <br />
                                                </strong>
                                             </div>
                                             <div>
                                                None                                                
                                             </div>
                                          @endif
                                       </span>
                                    </div>                                    
                                 </div>

                                 <div class="row-col pt-2 pb-2">
                                    @if($project->likes()->count() > 0)
                                       @if($project->likes()->count() == 1)
                                          Liked {{ $project->likes()->count() }} time by others
                                       @else
                                          Liked {{ $project->likes()->count() }} times by others
                                       @endif
                                    @else
                                       Not liked by anyone yet
                                    @endif
                                    @include('common.likeCard', ['model'=>$project])
                                 </div>
                              </a>
                           </div>
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
               <div class="row mb-2">
                  <div class="col ml-2 text-light">
                     Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{$projects->total()}} entries
                  </div>
                  <div class="col text-right p-0 m-0">
                     {{ $projects->links('UI.projects.pagination.custom') }}
                  </div>
               </div>
            @endif
         </div>
      </div>
   @else
      <div class="col-row p-3 card-trans-4 text-dark">
         {{ config('settings.noRecordsFound') }}
      </div>
   @endif



@endsection
