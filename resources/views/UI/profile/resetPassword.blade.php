@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@stop 

@section('pageHeader')
   Reset Password
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Edit Profile</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.member') --}}
   @include('UI.profile.blocks.contributions')
   {{-- @include('blocks.member') --}}
@endsection

@section('content')

	@include('common.messages')


	<form method="POST" action="{{ route('profile.resetPwdPost', $user->id) }}">
	   @csrf

		<div class="col">

			<div class="card card-trans-4 mb-2">

				<div class="card-body p-2">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="form-group">
								<label for="current-password" class="required">Current Password</label>
									<input id="current-password" type="password" class="form-control @error('current-password') is-invalid @enderror" name="current-password" autofocus="autofocus">
									{{-- @if ($errors->has('current-password'))
										<span class="text-danger">
											<strong>{{ $errors->first('current-password') }}</strong>
										</span>
										{{ Session::flash ('danger', 'Current password is required!') }}
									@endif --}}
									@error('current-password')
      <span class="invalid-feedback card-trans-4" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
							</div>

							<div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
								<label for="new-password" class="required">New Password</label>
									<input id="new-password" type="password" class="form-control form-control-sm" name="new-password">
									{{-- @if ($errors->has('new-password'))
										<span class="help-block">
											<strong>{{ $errors->first('new-password') }}</strong>
										</span>
									@endif --}}
							</div>

							<div class="form-group">
								<label for="new-password-confirm" class="required">Confirm New Password</label>
									<input id="new-password-confirm" type="password" class="form-control form-control-sm" name="new-password_confirmation">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-sm btn-primary">
								<i class="fa fa-save"></i>
								Reset Password
							</button>
				</div>

				<!-- CARD FOOTER -->
	         <div class="card-footer pt-1 pb-1 pl-2">
	            Fields marked with an <span class="required"></span> are required
	         </div>

			</div>
		</div>
	</form>
@endsection
