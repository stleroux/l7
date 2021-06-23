{{-- ADVANCED SEARCH PAGE  --}}

@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
  @if($searchResults)
      Advanced Search Results
   @else
      Advanced Search
   @endif
@endsection

@section('breadcrumb')
@endsection

@section('content')

@php
// dd($request);
@endphp
   <div class="container">

      <form action="{{ route('admin.advSearch') }}" method="POST" class="">
         @csrf
         <div class="card">

            <div class="card-body">
               <div class="row">
                  <div class="col-6">
                     <input type="text" name="query" class="form-control  @error('query') is-invalid @enderror" placeholder="Search For" aria-label="Search">
                     @error('query')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

               <div class="row-col bg-primary mt-2 p-1">
                  Search In   
               </div>

               <div class="row">

                  <div class="col-1">
                     <label for="bugs">Bugs
                        <input
                           type="checkbox"
                           name="bugs"
                           id="bugs"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="carvings">Carvings                  
                        <input
                           type="checkbox"
                           name="carvings"
                           id="carvings"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="faqs">Faqs                  
                        <input
                           type="checkbox"
                           name="faqs"
                           id="faqs"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="features">Features                  
                        <input
                           type="checkbox"
                           name="features"
                           id="features"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="finishes">Finishes                  
                        <input
                           type="checkbox"
                           name="finishes"
                           id="finishes"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="materials">Materials                  
                        <input
                           type="checkbox"
                           name="materials"
                           id="materials"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="movies">Movies                  
                        <input
                           type="checkbox"
                           name="movies"
                           id="movies"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="posts">Posts                  
                        <input
                           type="checkbox"
                           name="posts"
                           id="posts"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="projects">Projects                  
                        <input
                           type="checkbox"
                           name="projects"
                           id="projects"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="recipes">Recipes                  
                        <input
                           type="checkbox"
                           name="recipes"
                           id="recipes"
                           checked="checked"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="tags">Tags                  
                        <input
                           type="checkbox"
                           name="tags"
                           id="tags"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="users">Users                  
                        <input
                           type="checkbox"
                           name="users"
                           id="users"
                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

               </div>
            </div>

            <div class="card-footer">
               <button class="btn btn-primary col-2" type="submit">
                  <i class="fas fa-search pr-2"></i>
                  Search
               </button>

               <a href="{{ route('admin.advSearch') }}" class="btn btn-secondary">Clear Search Results</a>
            </div>
            
         </div>
      </form>


      @if($searchResults)
         <div class="card card-trans-6">
            <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

            <div class="card-body card-trans-4">

               @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                  <h3>{{ ucfirst($type) }}</h3>

                  @foreach($modelSearchResults as $searchResult)
                     <ul class="m-0">
                        <li class=""><a href="{{ $searchResult->url }}">{{ ucwords($searchResult->title) }}</a></li>
                     </ul>
                  @endforeach
               @endforeach

            </div>
         </div>
      @endif
   
   </div>

@endsection
