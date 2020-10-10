<div class="form-row">
   <div class="col-xl-8">
      <div class="card">
         <div class="card-header">General Information</div>
         <div class="card-body">
            <div class="form-row">
               <div class="col-xl-6">
                  @include('admin.movies.fields.title')
               </div>
               <div class="col-xl-3">
                  @include('admin.movies.fields.genre')
               </div>
               <div class="col-xl-3">
                  @include('admin.movies.fields.col_no')
               </div>
            </div>
            <div class="form-row">
               <div class="col">
                  @include('admin.movies.fields.overview')
               </div>
            </div>
         </div>
      </div>      
   </div>
   <div class="col-xl-4">
      <div class="card">
         <div class="card-header">Other Information</div>
         <div class="card-body">
            <div class="form-row">
               <div class="col-3">
                  @include('admin.movies.fields.running_time')
               </div>
               <div class="col">
                  @include('admin.movies.fields.studio')
               </div>
            </div>
            <div class="form-row">
               <div class="col-3">
                  @include('admin.movies.fields.imdb_no')
               </div>
               <div class="col">
                  @include('admin.movies.fields.upc')
               </div>
               <div class="col">
                  @include('admin.movies.fields.rating')
               </div>
            </div>
            <div class="form-row">
               <div class="col">
                  @include('admin.movies.fields.production_year')
               </div>
               <div class="col">
                  @include('admin.movies.fields.released')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

   <!-- COLLECTION NUMBER -->
   {{-- <div class="col-xs-12 col-sm-2">
      <div class="form-group {{ $errors->has('col_no') ? 'has-error' : '' }}">
         <label for="col_no" class="required">Collection N<supp>o</supp></label>
         <input type="text" name="col_no" class="form-control form-control-sm">
         <div class="pl-1 bg-danger">{{ $errors->first('col_no') }}</div>
      </div>
   </div> --}}

