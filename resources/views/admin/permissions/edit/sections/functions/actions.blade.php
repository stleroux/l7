<a href="{{ route('admin.permissions.index') }}" class="btn btn-block btn-default">
   <i class="{{ config('icons.back') }}"></i>
   Back
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-outline-success" name="submit" value="update">
         <i class="{{ config('icons.update') }}"></i>
         Update and Close
      </button>
      
      <button type="submit" class="btn btn-block btn-outline-info" name="submit" value="continue">
         <i class="{{ config('icons.update_continue') }}"></i>
         Update and Continue
      </button>

      <button type="reset" class="btn btn-block btn-default">
         <i class="{{ config('icons.reset') }}"></i>
         Reset Form
      </button>
      
   </div>
</div>
