@extends('layouts.UI.app-10-2')
{{-- @extends('layouts.UI.oldStyle') --}}

@section ('stylesheets')
   {{-- {{ Html::style('css/woodbarn.css') }} --}}
   {{-- <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}"> --}}
@stop 

@section('pageHeader')
   Edit Profile
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Edit Profile</li>
@endsection

@section('right_column')
   @include('UI.blocks.member')
   @include('UI.profile.blocks.contributions')
@endsection

@section('content')
   {{-- {!! Form::model($user, ['route'=>['profile.update', $user->id], 'method'=>'PUT', 'files'=>true]) !!} --}}

      <div class="card mb-3">
         <div class="card-header p-2">
            {{-- Edit Profile --}}
            <span class="float-right">
               <div class="btn-group">
                  {{-- @include('profile.buttons.back', ['size'=>'xs']) --}}
                  <a href="#" class="btn btn-sm btn-primary">Update</a>
                  {{-- @include('profile.buttons.update', ['size'=>'xs']) --}}
               </div>
            </span>
         </div>

         <div class="card-body p-2">
            
            <div class="form-row">
               <div class="col-9">
                  {{-- Account Info --}}
                  <div class="card mb-2">
                     <div class="card-header card_header p-2">Account Info</div>
                     <div class="card-body p-2">
                        <div class="form-row">
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.previous_login_date', ['label'=>'Previous Login'])
                              </div>
                           </div>
                           <div class="col-md-3 col-lg-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.last_login_date')
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.login_count')
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- Profile Info --}}
                  <div class="card mb-2">
                     <div class="card-header bg-primary p-2">Profile Info</div>
                     <div class="card-body p-2">
                        <div class="form-row">
                           <div class="col-md-3">
                              @include('admin.users.form.fields.first_name', ['required'=>'required'])
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 @include('admin.users.form.fields.last_name', ['required'=>'required'])
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 @include('admin.users.form.fields.email', ['required'=>'required'])
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.public_email')
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.telephone')
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.cell')
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.fax')
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 @include('admin.users.form.fields.website')
                              </div>
                           </div>
                        </div>

                        <div class="form-row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="company_name">Company Name</label>
                                 <input name="company_name" type="text" class="form-control form-control-sm" value="{{ $user->company_name }}">
                                 <span><small>Required if user is a client member of the Invoicer module</small></span>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label for="dart_doubleOut">Dart Double Out</label>
                                 <select name="dart_doubleOut" class="form-control form-control-sm">
                                    <option value="{{ $user->dart_doubleOut }}" selected="selected">{{ $user->dart_doubleOut }}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                 </select>
                                 <span><small>Preferred double out for Dart games</small></span>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>

               <div class="col-3">
                  @include('UI.profile.blocks.edit_image')
               </div>
            </div>

            {{-- Address Info --}}
            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header bg-info p-2">Address Info</div>
                     <div class="card-body section_body p-2">
                        <div class="form-row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 @include('admin.users.form.fields.address_1')
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 @include('admin.users.form.fields.address_2')
                              </div>
                           </div>
                        </div>

                        <div class="form-row">
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.city')
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.province')
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 @include('admin.users.form.fields.postal_code')
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
                     <div class="card-header bg-info p-2">Other Info</div>
                     <div class="card-body section_body p-2">
                        <div class="form-row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <div class="form-group">
                                    @include('admin.users.form.fields.notes')
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- CARD FOOTER -->
         <div class="card-footer pt-1 pb-1 pl-2">
            Fields marked with an <span class="required"></span> are required
         </div>
         
      </div>

   {{-- {{ Form::close() }} --}}

@endsection
