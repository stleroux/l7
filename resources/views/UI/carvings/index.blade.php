@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@stop

@section('pageHeader')
   <i class="{{ config('icons.carvings') }} mr-1"></i>
   Carvings
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Carvings</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   @include('UI.carvings.blocks.tags')
   @include('UI.carvings.blocks.faqs')
@endsection

@section('notice')
   @include('UI.carvings.index.notice')
@endsection

@section('topbar')
   @include('UI.carvings.index.topbar')
@endsection

@section('content')

   @if(count($carvings) > 0)
      
      <div class="card card-trans-2 mb-3">
      
         <div class="card-body card-trans-2 pb-0 mb-0">

            <div class="row card-trans-0 p-0 m-0 mb-0">

               @foreach($carvings as $carving)

{{-- @include('UI.carvings.showModal') --}}

                  <div  class="col-xl-3 pb-2">

                     <div id="card-hover" class="h-100 w-100" style="border: 2px black solid;">

                        <div class="position-relative p-0">
                           
                           @if($carving->created_at > \Carbon\Carbon::now()->subMonth())
                              <div class="ribbon-wrapper">
                                 <div class="ribbon bg-lime m-0">New</div>
                              </div>
                           @endif

                           <div class="h-100 thumbnail pt-2 text-center" {{-- style="background-image: url('/images/nav.jpg');" --}}>
                              <a href="{{ route('carvings.show', $carving->id) }}">
                              {{-- <a href="#" data-toggle="modal" data-target="#showModal{{ $carving->id}}"> --}}
                                 @if($carving->images->count() > 0)
                                    <img src="/_carvings/{{ $carving->id }}/thumbs/{{ $carving->images[0]->name }}" alt="{{ $carving->name}}" {{-- class="mx-auto mw-100" --}} height="150px" width="95%" />
                                 @else
                                    <img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
                                 @endif
                                 <h4 class="badge-dark p-1 m-1">{{ ucwords($carving->name) }}</h4>
                                 
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Category :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       {{ $carving->category }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Views :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       {{-- {{ $carving->views }} --}} {{ views($carving)->count() }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Comments :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       {{ $carving->comments->count() }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Images :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                        {{ count($carving->images) }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col text-right pr-0">
                                       <strong>Likes :</strong>
                                    </div>
                                    <div class="col text-left pl-1">
                                       {{ $carving->likes()->count() }}
                                    </div>
                                 </div>
                                 <div class="row-col pt-2 pb-2">
                                    {{-- @include('common.likeCard', ['model'=>$carving]) --}}
                                    @auth
                                       @can('like', $carving)
                                          <form class="" action="{{ route('like') }}" method="POST">
                                             @csrf
                                             <input type="hidden" name="likeable_type" value="{{ get_class($carving) }}"/>
                                             <input type="hidden" name="id" value="{{ $carving->id }}"/>
                                             <button class="btn btn-block btn-xs btn-outline-success text-dark font-weight-bold">@lang('Like')</button>
                                          </form>
                                       {{-- @endcan --}}

                                       {{-- @can('unlike', $carving) --}}
                                       @else
                                          <form class="" action="{{ route('unlike') }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <input type="hidden" name="likeable_type" value="{{ get_class($carving) }}"/>
                                             <input type="hidden" name="id" value="{{ $carving->id }}"/>
                                             <button class="btn btn-block btn-xs btn-outline-danger text-dark"><strong>@lang('Unlike')</strong></button>
                                          </form>
                                       @endcan
                                    @endauth
                                 </div>
                              </a>
                           </div>

                        </div>

                     </div>

                  </div>
               @endforeach

            </div>

            {{-- SHOW PAGINATION --}}
            @if (strpos($_SERVER['REQUEST_URI'], "1000") === false)
               <div class="row mb-2">
                  <div class="col ml-2 text-light">
                     Showing {{ $carvings->firstItem() }} to {{ $carvings->lastItem() }} of {{$carvings->total()}} entries
                  </div>
                  <div class="col text-right p-0 m-0">
                     {{ $carvings->links('UI.carvings.pagination.custom') }}
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
