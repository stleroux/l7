{{-- ADVANCED SEARCH PAGE  --}}

@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.search') }}"></i>
   @if($searchResults)
      Advanced Search Results
   @else
      Advanced Search
   @endif
@endsection

@section('breadcrumb')
@endsection

@section('content')

   <div class="container">

      <div class="card collapsed-card p-2">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <div class="card-header text-left text-dark">
               <div class="card-title">
                  Searching Instructions            
               </div>
               <div class="card-tools">
                     <i class="fas fa-plus"></i>
               </div>
            </div>
         </button>
         <div class="card-body">
            <p>Searching is a 2 step process.</p>
            <p>First : Select the areas on the site you wish to search in and Save the settings.</p>
            <p>Second : Enter your search term(s) in the search for field.</p>
            <p>Click on the Search button.</p>
         </div>
      </div>

      <form action="{{ route('admin.advSearchSave') }}" method="POST" class="">
         @csrf
         
         <div class="card collapsed-card p-2">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
               <div class="card-header text-left text-dark">
                  <div class="card-title">
                     Search Criterias                     
                  </div>
                  <div class="card-tools">
                        <i class="fas fa-plus"></i>
                  </div>
               </div>
            </button>
            
            <div class="card-body">

               <div class="row">

                  <div class="col-1">
                     <label for="bugs">Bugs
                        <input
                           type="checkbox"
                           name="search_bugs"
                           id="search_bugs"
                           {{ Auth::user()->search_bugs ? 'checked="checked"' : '' }}
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
                           name="search_carvings"
                           id="search_carvings"
                           {{ Auth::user()->search_carvings ? 'checked="checked"' : '' }}
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
                           name="search_faqs"
                           id="search_faqs"
                           {{ Auth::user()->search_faqs ? 'checked="checked"' : '' }}
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
                           name="search_features"
                           id="search_features"
                           {{ Auth::user()->search_features ? 'checked="checked"' : '' }}
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
                           name="search_finishes"
                           id="search_finishes"
                           {{ Auth::user()->search_finishes ? 'checked="checked"' : '' }}
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
                           name="search_materials"
                           id="search_materials"
                           {{ Auth::user()->search_materials ? 'checked="checked"' : '' }}
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
                           name="search_movies"
                           id="search_movies"
                           {{ Auth::user()->search_movies ? 'checked="checked"' : '' }}
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
                           name="search_posts"
                           id="search_posts"
                           {{ Auth::user()->search_posts ? 'checked="checked"' : '' }}
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
                           name="search_projects"
                           id="search_projects"
                           {{ Auth::user()->search_projects ? 'checked="checked"' : '' }}
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
                           name="search_recipes"
                           id="search_recipes"
                           {{ Auth::user()->search_recipes ? 'checked="checked"' : '' }}
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
                           name="search_tags"
                           id="search_tags"
                           {{ Auth::user()->search_tags ? 'checked="checked"' : '' }}
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
                           name="search_users"
                           id="search_users"
                           {{ Auth::user()->search_users ? 'checked="checked"' : '' }}
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
               <button type="submit" class="btn btn-outline-secondary">Save Settings</button>                  
            </div>
         </div>
      </form>


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
