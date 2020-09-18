{{-- Account Info --}}
               <div class="card mb-2">
                  <div class="card-header card_header p-2">Account Info</div>
                  <div class="card-body section_body p-2">
                     <div class="form-row">
                        {{-- <div class="col-md-2">
                           <div class="form-group">
                              {{ Form::label('username', 'Username') }}
                              {{ Form::text('username', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }}
                           </div>
                        </div> --}}
                        <div class="col-md-2">
                           <div class="form-group">
                              {{-- {{ Form::label('created_at', 'Member Since', ['class'=>'control-label']) }} --}}
                              <label for="">Member Since</label>
                              {{-- {{ Form::text('created_at', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                              {{ Auth::user()->created_at }}
                           </div>
                        </div>
                        <div class="col-md-3 col-lg-2">
                           <div class="form-group">
                              {{-- {{ Form::label('last_login_date', 'Last Login Date', ['class'=>'control-label']) }}
                              {{ Form::text('last_login_date', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                              <label for="">Last Login Date</label>
                              {{ Auth::user()->last_login_date }}
                           </div>
                        </div>
                        <div class="col-md-2 col-lg-2">
                           <div class="form-group">
                              {{-- {{ Form::label('login_count', 'Login Count', ['class'=>'control-label']) }}
                              {{ Form::text('login_count', null, ['class'=>'form-control form-control-sm', 'readonly'=>'readonly']) }} --}}
                              <label for="">Login Count</label>
                              {{ Auth::user()->login_count }}
                           </div>
                        </div>
                        {{-- <div class="col-md-2">
                           <div class="form-group">
                              <label>Total Permissions</label>
                              <input type="text" class="form-control form-control-sm" value="{{ $user->permissions->count() }}" disabled>
                           </div>
                        </div> --}}
                        {{-- <div class="col-md-2">
                           <div class="form-group">
                              <label>Invoicer Client</label>
                              <input type="text" class="form-control form-control-sm" value="{{ $user->invoicer_client }}" disabled>
                           </div>
                        </div> --}}
                        {{-- <div class="col-md-2">
                           <div class="form-group">
                              <label for="status">Invoicer Client</label>
                              <select name="invoicer_client" id="invoicer_client" class="form-control form-control-sm" disabled>
                                 @foreach($user->invoicerclientOptions() as $invoicerclientOptionKey => $invoicerclientOptionValue)
                                    <option value="{{$invoicerclientOptionKey}}" {{ $user->invoicerclientClient == $invoicerclientOptionValue ? 'selected' : '' }}>{{ $invoicerclientOptionValue }}</option>
                                 @endforeach
                              </select>
                              <div class="bg-danger">{{ $errors->first('invoicer_client') }}</div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>