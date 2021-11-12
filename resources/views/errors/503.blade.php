{{-- <!DOCTYPE html>
<html>
   <head>
      <title>Be right back.</title>

      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

      <style>
         html, body {
            height: 100%;
         }

         body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
         }

         .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
         }

         .content {
            text-align: center;
            display: inline-block;
         }

         .title {
            font-size: 72px;
            margin-bottom: 40px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="content">
            <div class="title">Be right back.</div>
         </div>
      </div>
   </body>
</html> --}}

@extends('layouts.UI.maintenance')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ config('icons.projects') }} col-2 text-green pr-2"></i> --}}
   <div class="text-center text-logo">
      Welcome to TheWoodBarn.ca
   </div>
   {{-- <i class="{{ config('icons.projects') }} col-2 text-green pl-2"></i> --}}
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li> --}}
@endsection

@section('rightColumn')
@endsection

@section('content')
   <div class="card">
      <div class="card-header bg-steel text-warning text-bold">We will be back shortly</div>
      <div class="card-body bg-dark">
         <p>
            We are currently working hard to update and maintain the site
         </p>
         <p>
            Thank you for your patience
         </p>
         <p>
            Please come back soon
         </p>
      </div>
      <div class="card-footer">
         <b>TheWoodBarn.ca</b> management team
      </div>
   </div>
@endsection