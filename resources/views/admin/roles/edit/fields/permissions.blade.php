<!-- PERMISSIONS -->
<div class="card card-info">
   <div class="card-header">
      <div class="card-title">Permissions</div>
   </div>
   <div class="card-body pb-0">
      <div class="row mb-0">
         @foreach($permissions as $permission => $bulk)
            <div class="card card-outline card-primary col-lg-3 col-md-4">
               <div class="card-header">
                  <div class="card-title">{{ strtoupper($permission) }}</div>
               </div>
               <div class="card-body">
                  @foreach($bulk as $perm)
                     <div class="icheck-primary d-inline">
                        <input name="permissions[]" type="checkbox" id="{{ $perm->id }}" value="{{ $perm->id }}"
                           @if($role->permissions->pluck('id')->contains($perm->id)) checked @endif >
                        <label for="{{ $perm->id }}" style="font-weight: normal">
                           {{ trim(ucfirst(explode('-', $perm->name)[1])) }}
                        </label>
                     </div>
                     <br />
                  @endforeach
               </div>
            </div>
         @endforeach
      </div>
   </div>
</div>
