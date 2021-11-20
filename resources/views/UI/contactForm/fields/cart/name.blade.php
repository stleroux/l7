{{-- @if(Auth::user())
   <div class="form-group">
      <label for="email" class="required">Email</label>
      <input
         id="email"
         name="email"
         class="form-control form-control-sm @error('email') is-invalid @enderror"
         readonly="readonly"
         value="{{ Auth::user()->email }}">
      @error('email')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror
   </div>
@else --}}
   <div class="form-group">
      <label for="name" class="required">Name</label>
      <input
         id="name"
         name="name"
         class="form-control form-control-sm @error('name') is-invalid @enderror"
         value="{{ old('name') }}">
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror
   </div>
{{-- @endif --}}
