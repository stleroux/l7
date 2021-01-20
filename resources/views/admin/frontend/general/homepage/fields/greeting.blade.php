<form action="{{ route('admin.homepage.update', $greeting->id) }}" method="POST">
   @csrf
   @method("PUT")

   <div class="card">
      <div class="card-header p-2 bg-primary">Greeting</div>
      <div class="card-body p-2 mb-0 pb-0">
         <input type="hidden" name="name" value="{{ $greeting->name }}">

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
                  value="{{ old('title') ?? $greeting->title }}"
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
               <textarea name="body" id="wysiwyg-small" class="form-control form-control-sm wysiwyg-small">{{ old('body') ?? $greeting->body }}</textarea>
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
