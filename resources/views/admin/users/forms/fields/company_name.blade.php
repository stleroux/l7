{{-- COMPANY NAME --}}

<div class="form-group">

   <label for="company_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Company Name' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->company_name !!}
      </div>

   @else

      <input
         type="text"
         name="company_name"
         id="company_name"
         class="form-control @error('company_name') is-invalid @enderror"
         value="{{ old('company_name') ?? $user->company_name }}"
         placeholder="Company Name"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('company_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
   {{-- <span><small>Required if user is a client member of the Invoicer module</small></span> --}}

</div>
