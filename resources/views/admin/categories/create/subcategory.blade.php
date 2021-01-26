@can('category-create')
   <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="sub">

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Sub Category</div>
            <div class="float-right">
               @include('admin.categories.actions.common.reset')
               @include('admin.categories.actions.common.save')
            </div>
         </div>

         <div class="card-body pb-0">

            <div class="row">

               <div class="col-6">
                  <div class="form-group">
                     {{-- {{ Form::label('sSubs', 'Main Category', ['class'=>'required']) }} --}}
                     <label for="sSubs" class="required">Parent Category Name</label>
                     <select name="sSubs" id="sSubs" class="form-control form-control-sm @error('sSubs') is-invalid @enderror">
                        <option value="">Select One</option>
                        @foreach($parentCategories as $k)
                           <option value="{{ $k['id'] }}">{{ ucwords($k['name']) }}</option>
                        @endforeach
                     </select>
                     @error('sSubs')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

               <div class="col-6">
                  <div class="form-group">
                     <label for="sName" class="required">Category Name</label>
                     <input type="text" name="sName" class="form-control form-control-sm @error('sName') is-invalid @enderror">
                     @error('sName')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

               <div class="w-100"></div>

               <div class="col">
                  <div class="form-group">
                     <label for="sDescription">Category Description</label>
                     <input type="text" name="sDescription" class="form-control form-control-sm">
                  </div>
               </div>

            </div>

         </div>

         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
@endcan
