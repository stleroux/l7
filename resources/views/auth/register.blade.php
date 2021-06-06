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
						<i class="{{ config('icons.register') }}"></i>
						{{ __('Register') }}
					</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}">
							@csrf

							<div class="form-group row">
							   <label for="username" class="col-md-4 col-form-label text-md-right required">
							   	{{ __('Username') }}
							   </label>
							 
							   <div class="col-md-6">
							      <input
							        	id="username"
							        	type="text"
							         class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
							         name="username"
							         value="{{ old('username') }}"
							         required
							         autofocus
							      >
							 
							        @if ($errors->has('username'))
							            <span class="invalid-feedback">
							                <strong>{{ $errors->first('username') }}</strong>
							            </span>
							        @endif
							    </div>
							</div>

							<div class="form-group row">

								<label for="email" class="col-md-4 col-form-label text-md-right required">
									{{ __('E-Mail Address') }}
								</label>

								<div class="col-md-6">
									<input
										id="email"
										type="email"
										class="form-control @error('email') is-invalid @enderror"
										name="email"
										value="{{ old('email') }}"
										required
										autocomplete="email"
									>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								
								<label for="password" class="col-md-4 col-form-label text-md-right required">
									{{ __('Password') }}
								</label>
									
								<div class="col-md-6">
									<input
										id="password"
										type="password"
										class="form-control @error('password') is-invalid @enderror"
										name="password"
										required
										autocomplete="new-password"
									>

									@error('password')
										<span
											class="invalid-feedback"
											role="alert"
										>
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">

								<label
									for="password-confirm"
									class="col-md-4 col-form-label text-md-right required"
								>
									{{ __('Confirm Password') }}
								</label>

								<div class="col-md-6">
									<input
										id="password-confirm"
										type="password"
										class="form-control"
										name="password_confirmation"
										required
										autocomplete="new-password"
									>
								</div>
							</div>

							<div class="form-group row">
							   <label for="reasonToRegister" class="col-md-4 col-form-label text-md-right required">
							   	{{ __('Reason for account request') }}
							   </label>
							 
							   <div class="col-md-6">
							      <input
							        	id="reasonToRegister"
							        	type="text"
							         class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
							         name="reasonToRegister"
							         value="{{ old('reasonToRegister') }}"
							         required
							      >
							 
							        @if ($errors->has('reasonToRegister'))
							            <span class="invalid-feedback">
							                <strong>{{ $errors->first('reasonToRegister') }}</strong>
							            </span>
							        @endif
							    </div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button
										type="submit"
										class="btn btn-primary"
									>
										{{ __('Register') }}
									</button>
								</div>
							</div>
						</form>
					</div>

					<div class="card-footer">
						{{ __('All fields are required') }}.
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
