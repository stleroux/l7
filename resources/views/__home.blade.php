@extends('layouts.app')

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="#">Qwerty</a></li>
   <li class="breadcrumb-item active">Administration</li>
@endsection

@section('content')

   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
               @if (session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif

               You are logged in!
            </div>
         </div>
      </div>
   </div>

@endsection
