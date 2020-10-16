@extends('layouts.admin.admin-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@stop

@section('pageHeader')
   <i class="{{ Config::get('icons.movies') }}"></i>
   Movie :: {{ $movie->title }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.movies.index') }}">Movies</a></li>
@endsection

{{-- @section('rightColumn') --}}
   {{-- @include('admin.movies.blocks.sidebar') --}}
   {{-- @include('admin.movies.blocks.search') --}}
   {{-- @include('admin.movies.blocks.archives') --}}
{{-- @endsection --}}

@section('topbar')
   @include('admin.movies.show.topbar')
@endsection

@section('content')
  
<div class="card p-0 mb-3">
   
   <div class="card-body p-2">
      
      <div class="row">
         
         <div class="col-xl-10">
            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Collection No</div>
                     <div class="card-body p-1 m-0">{{ $movie->col_no }}</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Views</div>
                     <div class="card-body p-1 m-0">{{ $movie->views }}</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Category</div>
                     <div class="card-body p-1 m-0">{{ $movie->category }}</div>
                  </div>
               </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Production Year</div>
                     <div class="card-body p-1 m-0">{{ $movie->production_year }}</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Released</div>
                     <div class="card-body p-1 m-0">{{ $movie->released }}</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Running Time</div>
                     <div class="card-body p-1 m-0">{{ $movie->running_time }} minutes</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">IMDB N<sup>o</sup></div>
                     <div class="card-body p-1 m-0">
                        @if($movie->imdb_no)
                           <a href="https://www.imdb.com/title/{{ $movie->imdb_no }}" target="_blank">{{ $movie->imdb_no }}</a>
                        @endif
                     </div>
                  </div>
               </div> <!-- end col -->                  
            </div> <!-- end row -->

            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Overview</div>
                     <div class="card-body p-1 m-0">{!! $movie->overview !!}</div>
                  </div>
               </div> <!-- end col -->
            </div> <!-- end row -->
         </div>

         <div class="col-xl-2">
            <a href="#" class="" data-toggle="modal" data-target="#imageModal">
            @if(!Str::contains($movie->upc, 'Disc ID: '))
               @if(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.3f.jpg')))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc . '.3f.jpg') }}" />
               @elseif(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.2f.jpg')))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc . '.2f.jpg') }}" />
               @else
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc) }}f.jpg" />
               @endif
            @else
               @if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I'))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $image . 'f.jpg') }}" />
               @endif
            @endif
            @if(!Str::contains($movie->upc, 'Disc ID: '))
               @if(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.3b.jpg')))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc . '.3b.jpg') }}" />
               @elseif(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.2b.jpg')))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc . '.2b.jpg') }}" />
               @else
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $movie->upc) }}b.jpg" />
               @endif
            @else
               @if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I'))
                  <img src="\_movies\thumbnails\{{ str_replace('-', '', $image . 'b.jpg') }}" />
               @endif
            @endif
            </a>
         </div>
      </div>
   </div>
</div>

   @include('admin.movies.show.imageModal')

@endsection
