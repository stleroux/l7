<form action="{{ route('admin.homepage.update') }}" method="POST">
   @csrf
   @method("PUT")
   
   <div class="card">
      <div class="card-header p-2 bg-primary">Projects</div>
      <div class="card-body p-2">
         <input type="hidden" name="name" value="{{ $projects->name }}">

         <div class="row">

            <div class="form-group col-12">

               <label for="title" class="{{ $required ?? '' }}">
                  {{ $label ?? 'Title' }}
               </label>
               
               <input
                  type="text"
                  name="title"
                  id="title"
                  class="form-control form-control-sm @error('title') is-invalid @enderror"
                  value="{{ old('title') ?? $projects->title }}"
                  placeholder="Title"
                  data-inputmask=""
                  autofocus
                  onfocus="this.focus();this.select()"
               />
               
               @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror

            </div>

            <div class="form-group col-12">
               <label for="body" class="required">Body</label>
               <textarea name="body" id="wysiwyg-small" class="form-control form-control-sm wysiwyg-small">{{ old('body') ?? $projects->body }}</textarea>
               <div class="pl-1 bg-danger">{{ $errors->first('body') }}</div>
            </div>

         </div>      
      </div>
      <div class="card-footer">
         <button type="submit" class="btn btn-sm btn-primary">Save</button>
         <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
      </div>
   </div>

</form>
