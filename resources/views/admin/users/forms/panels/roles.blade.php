@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-info">
@else
   <div class="card {{ ($user->account_status ? 'card-info' : 'card-danger') }}">
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Roles
      {{-- </div> --}}
   </div>

   <div class="card-body p-2">
      <!-- ROLES -->
      <div class="form-group">
         <dl class="pl-1">
            @foreach($roles as $role)
               <div class="row">
                  <div class="col-6">
                     {{ ucfirst($role->name) }}
                  </div>
                  <div class="col-3">
                     <input
                        class="form-check-input"
                        id="roles"
                        type="checkbox"
                        name="roles[]"
                        value="{{ $role->id }}"
                        data-bootstrap-switch
                        data-off-color="danger"
                        data-off-text="Denied"
                        data-on-color="success"
                        data-on-text="Granted"
                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif
                        @if(Route::currentRouteName('') == 'admin.users.show')
                           disabled
                        @endif
                     />
                  </div>
                  <div class="col text-right">
                     <i class="far fa-question-circle"
                        data-toggle="tooltip"
                        data-placement="left"
                        title="@foreach($role->permissions as $permission) @if(!$loop->last) {{ ucfirst($permission->name) }}, @else {{ ucfirst($permission->name) }} @endif @endforeach">
                     </i>
                  </div>
               </div>
               <hr class="m-1" />
            @endforeach
         </dl>
      </div>
   </div>

</div>
