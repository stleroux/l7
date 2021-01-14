@extends('layouts.UI.app-fw')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('content')
   <div class="container pt-2">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card card-trans-2">




               <div class="card-header bg-info">
                  <i class="{{ config('icons.login') }}"></i>
                  {{ __('Login') }}
               </div>

               <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                     @csrf

<!-- Display message if account has not been approved by an administrator yet -->
@if(session()->has('message'))
   <p class="alert alert-info">
      {{ session()->get('message') }}
   </p>
@endif

{{--                      <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                           <input
                              id="email"
                              type="email"
                              class="form-control @error('email') is-invalid @enderror"
                              name="email"
                              value="{{ old('email') }}"
                              required
                              autocomplete="email"
                              autofocus
                           >

                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div> --}}


<div class="form-group row">
    <label for="login" class="col-sm-4 col-form-label text-md-right">
        {{ __('Username or Email') }}
    </label>
 
    <div class="col-md-6">
        <input id="login" type="text"
               class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
               name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
 
        @if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                           <input
                              id="password"
                              type="password"
                              class="form-control @error('password') is-invalid @enderror"
                              name="password"
                              required
                              autocomplete="current-password"
                           >

                           @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>

                     <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                           <div class="form-check">
                              <input
                                 class="form-check-input"
                                 type="checkbox"
                                 name="remember"
                                 id="remember" {{ old('remember') ? 'checked' : '' }}
                              >
                              <label class="form-check-label" for="remember">
                                 {{ __('Remember Me') }}
                              </label>
                           </div>
                        </div>
                     </div>

                     <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                           <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                           </button>

                           @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                              </a>
                           @endif
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
