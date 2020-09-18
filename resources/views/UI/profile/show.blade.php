@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection    

@section('left_column')
   {{-- @include('blocks.main_menu') --}}
@endsection

@section('pageHeader')
   View Profile
@endsection

@section('right_column')
   {{-- @include('blocks.member') --}}
   @include('UI.profile.blocks.contributions')
@endsection

@section('content')

{{-- {!! Form::model($user, ['route'=>['profile.show', $user->id], 'method'=>'GET']) !!} --}}

   {{-- @include('UI.profile.show.topbar') --}}

   <div class="card mb-3">

      {{-- <div class="card-header section_header p-2">
         Show Profile
         <span class="float-right">
            <div class="btn-group"> --}}
               {{-- @include('projects.addins.links.help', ['size'=>'xs', 'bookmark'=>'projects']) --}}
               {{-- @include('users.buttons.back', ['size'=>'xs']) --}}
{{--                @if($user->id === Auth::user()->id)
                  <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-xs btn-primary">
                     <i class="fa fa-edit"></i>
                     Edit Profile
                  </a>
               @endif
            </div>
         </span>
      </div> --}}

      <div class="card-body section_body p-2">

         <div class="form-row">
            <div class="col-9">
               @include('UI.profile.show.general')
               @include('UI.profile.show.account')
            </div>

               

               

            <div class="col-3">
               {{-- @include('profile.blocks.image') --}}
            </div>
         </div>

         {{-- Address Info --}}
         <div class="form-row">
            <div class="col">
               <div class="card mb-2">
                  <div class="card-header card_header p-2">Address Info</div>
                  <div class="card-body section_body p-2">
                     <div class="form-row">
                        <div class="col-md-1">
                           <div class="form-group">
                              {{-- {{ Form::label('civic_number', 'Unit N<sup>o</sup>', ['class'=>'control-label'], false) }}
                              {{ Form::text('civic_number', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              {{-- {{ Form::label('address_1', 'Address', ['class'=>'control-label']) }}
                              {{ Form::text('address_1', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              {{-- {{ Form::label('address_2', 'Address 2', ['class'=>'control-label']) }}
                              {{ Form::text('address_2', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="col-md-2">
                           <div class="form-group">
                              {{-- {{ Form::label('city', 'City', ['class'=>'control-label']) }}
                              {{ Form::text('city', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              {{-- {{ Form::label('province', 'Province / State', ['class'=>'control-label']) }}
                              {{ Form::text('province', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>                                    
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              {{-- {{ Form::label('postal_code', 'Postal / Zip Code', ['class'=>'control-label']) }}
                              {{ Form::text('postal_code', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         {{-- Other Info --}}
         <div class="form-row">
            <div class="col">
               <div class="card mb-2">
                  <div class="card-header card_header p-2">Other Info</div>
                  <div class="card-body section_body p-2">
                     <div class="form-row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              {{-- {{ Form::label('notes', 'Notes', ['class'=>'control-label']) }}
                              {{ Form::textarea('notes', null, ['class'=>'form-control form-control-sm', 'rows'=>2, 'readonly'=>'readonly']) }} --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>

   </div>

@endsection
