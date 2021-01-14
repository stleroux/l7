@can('permission-create')
   <form action="{{ route('admin.permissions.storeSingle') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="single" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Permission</div>
            <div class="float-right">
               <button type="reset" class="btn btn-sm btn-info border">
                  <i class="{{ config('icons.reset') }}"></i>
                  Reset
               </button>
               <button type="submit" class="btn btn-sm btn-primary">
                  <i class="{{ config('icons.save') }}"></i>
                  Save
               </button>
            </div>
         </div>
         
         <div class="card-body pt-2">

            <div class="row">
               @include('admin.permissions.fields.name')
               @include('admin.permissions.fields.description')
            </div>
            
         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
@endcan
