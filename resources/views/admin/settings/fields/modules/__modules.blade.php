<!-- FRONTEND MODULES -->

<div class="col-12">

   <div class="card">
     <div class="card-body p-2">
      <div class="table-responsive">
         <table class="table table-sm table-striped">
            <colgroup>
               <col class="col-xs-2"></col>
               <col class="col-xs-10"></col>
            </colgroup>
            <thead></thead>
            <tbody>
               @include('admin.settings.fields.modules.blog')
               @include('admin.settings.fields.modules.carvings')
               @include('admin.settings.fields.modules.darts')
               @include('admin.settings.fields.modules.projects')
               @include('admin.settings.fields.modules.recipes')
            </tbody>
         </table>

         
       </div>
         <small>Indicate whether a module is visible (active) in the frontend</small>
      {{-- </div> --}}
     </div>
   </div>

</div>
