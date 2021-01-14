@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('left_column')
@endsection

@section('rightColumn')
   {{-- @include('movies.blocks.popular') --}}
   {{-- @include('movies.blocks.archives') --}}
@endsection

@section('content')
   
   <div class="card mb-3">

      <div class="card-header section_header p-2">
         <div class="row p-0 m-0">
            <div class="col-sm-12 col-md-12 col-lg-4 px-0">
               <i class="{{ config('buttons.movies') }}"></i>
               {{ $movie->title }}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 px-0">
               @if(Route::currentRouteName() != "movies.search")
                  <div class="text-center">
                     <div class="btn-group">
                        {{-- @include('movies.buttons.previous', ['size'=>'xs', 'btn_label'=>'Previous', $previous]) --}}
                        {{-- @include('movies.buttons.next', ['size'=>'xs', 'btn_label'=>'Next', $next]) --}}
                     </div>
                  </div>
               @endif
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 px-0">
               <div class="text-right">
                  <div class="btn-group">
                     {{-- @include('movies.buttons.back', ['size'=>'xs', 'btn_label'=>'Back']) --}}
                     {{-- @include('movies.buttons.print', ['size'=>'xs', 'btn_label'=>'Print']) --}}
                     {{-- @include('movies.buttons.printPDF', ['size'=>'xs', 'btn_label'=>'Print PDF']) --}}
                     {{-- @include('movies.buttons.favorite', ['size'=>'xs', 'btn_label'=>'Favorite']) --}}
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="card-body section_body p-2">

         <div class="form-row">
            
            <div class="col">
            
               <div class="card mb-2">
                  <div class="card-header p-1 m-0">Title</div>
                  <div class="card-body p-1 m-0">{{ $movie->title }}</div>
               </div>

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
                        <div class="card-header p-1 m-0">Image</div>
                        <div class="card-body p-1 m-0">{{ $movie->upc }}</div>
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
            </div> <!-- end left col -->
            
            <div class="col">
               <div>
                  @if(!Str::contains($movie->upc, 'Disc ID: '))
                     @if(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.3f.jpg')))
                        <img src="\_movies\{{ str_replace('-', '', $movie->upc . '.3f.jpg') }}" />2
                     @elseif(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.2f.jpg')))
                        <img src="\_movies\{{ str_replace('-', '', $movie->upc . '.2f.jpg') }}" />3
                     @else
                        <img src="\_movies\{{ str_replace('-', '', $movie->upc) }}f.jpg" />4
                     @endif
                  @else
                     @if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I'))
                        <img src="\_movies\{{ str_replace('-', '', $image . 'f.jpg') }}" />1
                     @endif
                  @endif
               </div>
            </div> <!-- end right col -->

         </div> <!-- end row -->
      </div> <!-- end of main card body -->
   </div> <!-- end of main card -->
   
@endsection

