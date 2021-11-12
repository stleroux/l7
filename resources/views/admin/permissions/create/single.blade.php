@can('permission-create')
   <form action="{{ route('admin.permissions.storeSingle') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="single" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Permission</div>
            <div class="float-right">
               {{-- <button type="reset" class="btn btn-sm btn-info border">
                  <i class="{{ config('icons.reset') }}"></i>
                  Reset
               </button>
               <button type="submit" class="btn btn-sm btn-primary">
                  <i class="{{ config('icons.save') }}"></i>
                  Save
               </button> --}}
               @include('admin.permissions.actions.common.reset')
               @include('admin.permissions.actions.common.save')
            </div>
         </div>

         {{-- @include('common.form_submission_error') --}}
         
         <div class="card-body pt-2">

            <div class="row">
               @include('admin.permissions.forms.fields.name')
               @include('admin.permissions.forms.fields.description')
            </div>
            
         </div>
         
         @if(Route::currentRouteName('') != 'admin.permissions.show')
            <div class="card-footer p-1">
               {!! Config::get('settings.formFieldsRequired') !!}
            </div>
         @endif

      </div>
   </form>
@endcan
