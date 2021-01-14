<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <button type="submit" class="btn btn-block btn-default">
         <i class="{{ config('icons.save') }}"></i>
         Save Settings
      </button>

      <button type="reset" class="btn btn-block btn-default" title="Reset Form">
         <i class="{{ config('icons.reset') }}"></i>
         <div class="d-none d-lg-inline">
            Reset Form
         </div>
      </button>

      <a href="{{ route('admin.settings.index') }}" class="btn btn-block btn-default">
         <i class="{{ config('icons.reload') }}"></i>
         Reload Settings
      </a>

   </div>
</div>
